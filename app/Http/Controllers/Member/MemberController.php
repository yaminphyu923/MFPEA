<?php

namespace App\Http\Controllers\Member;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\MemberMail;
use App\Mail\NearMemberMail;
use Illuminate\Http\Request;
use App\Exports\MembersExport;
use App\Imports\MembersImport;
use App\Models\Members\Member;
use App\Models\Members\Category;
use App\Models\Members\AnnualFee;
use App\Models\Members\MemberType;
use App\Http\Controllers\Controller;
use App\Models\Members\BusinessType;
use App\Models\Members\LimitMembers;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:member-list|member-create|member-edit|member-delete|member-excel', ['only' => ['index','show']]);
         $this->middleware('permission:member-create', ['only' => ['create','store']]);
         $this->middleware('permission:member-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:member-delete', ['only' => ['destroy']]);
         $this->middleware('permission:member-excel', ['only' => ['memberExport','memberImport']]);
         $this->middleware('permission:member-active', ['only' => ['activeMember']]);
         $this->middleware('permission:member-near-expired', ['only' => ['nearExpiredMember']]);
         $this->middleware('permission:member-expired', ['only' => ['expiredMember']]);
    }

    public function index(Request $request)
    {
        if($request->category_id && $request->category_id != "all"){
            $members = Member::where('category_id',$request->category_id)->get();
            $limit = LimitMembers::first();
        }
        elseif($request->member_type_id && $request->member_type_id != "all"){
            $members = Member::where('member_type_id',$request->member_type_id)->get();
            $limit = LimitMembers::first();
        }
        else{
            $members = Member::all();
            $limit = LimitMembers::first();
        }

        $categories = Category::all();
        $member_types = MemberType::all();
        $limit = LimitMembers::first();
        return view('backend.members.index',compact('members','categories','member_types','limit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member_types = MemberType::all();
        $categories = Category::all();
        $business_types = BusinessType::all();
        $members = Member::get();
        $limit = LimitMembers::first();
        if ($limit->limit_member >= count($members))
        {
            return view('backend.members.create',compact('member_types','categories','business_types','limit','members'));
        }else{
            return back();
        }
        // return view('backend.members.create',compact('member_types','categories','business_types','limit','members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sql = new Member;

                if($request->file("photo")) {
                    $file=$request->file("photo");
                    $filename = time().'_'.$file->getClientOriginalName();
                    $path=public_path('photos/members');
                    $file->move($path, $filename);

                    $sql->photo = $filename;
                }

                $sql->name = $request->name;
                $sql->father_name = $request->father_name;
                $sql->birth_date = $request->birth_date;
                $sql->birth_place = $request->birth_place;
                $sql->nationality = $request->nationality;
                $sql->nrc = $request->nrc;
                $sql->edu = $request->edu;
                $sql->occupation = $request->occupation;
                $sql->resident_no = $request->resident_no;
                $sql->resident_street = $request->resident_street;
                $sql->resident_township = $request->resident_township;
                $sql->resident_city = $request->resident_city;
                $sql->resident_state = $request->resident_state;
                $sql->postal_code = $request->postal_code;
                $sql->phone = $request->phone;
                $sql->member_id = $request->member_id;
                $sql->member_type_id = $request->member_type_id;
                $sql->company_name = $request->company_name;
                $sql->registration_no_date = $request->registration_no_date;
                $sql->business_name = $request->business_name;
                $sql->business_no_date = $request->business_no_date;
                $sql->paid_capital = $request->paid_capital;
                $sql->employee_no = $request->employee_no;
                $sql->contact_person = $request->contact_person;
                $sql->designaion = $request->designaion;
                $sql->office_no = $request->office_no;
                $sql->office_street = $request->office_street;
                $sql->office_ward = $request->office_ward;
                $sql->office_township = $request->office_township;
                $sql->office_city = $request->office_city;
                $sql->office_state = $request->office_state;
                $sql->office_phone = $request->office_phone;
                $sql->fax = $request->fax;
                $sql->viber = $request->viber;
                $sql->website = $request->website;
                $sql->business_type_id = $request->business_type_id;
                $sql->business_text = $request->business_text;

                // $sql->contact_person = $request->contact_person;
                $sql->ms_no = $request->ms_no;
                $sql->ms_date = $request->ms_date;
                // $sql->member_type_id = $request->member_type_id;
                $sql->category_id = $request->category_id;
                //
                $sql->business_reg = $request->business_reg;
                $sql->business_regdate = $request->business_regdate;
                $sql->company_name_address = $request->company_name_address;
                $sql->product_item = $request->product_item;
                // $sql->phone_no = $request->phone_no;
                // $sql->fax = $request->fax;
                $sql->email = $request->email;
                $sql->entrance_fee = $request->entrance_fee;
                $sql->name_address_myan = $request->name_address_myan;
                $sql->ms_no_myan = $request->ms_no_myan;
                $sql->ms_date_myan = $request->ms_date_myan;
                $sql->phone_myan = $request->phone_myan;
                $sql->fax_myan = $request->fax_myan;
                $sql->nrc_myan = $request->nrc_myan;
                $sql->business_reg_myan = $request->business_reg_myan;
                $sql->business_regdate_myan = $request->business_regdate_myan;
                $sql->status = $request->status;
                $sql->save();
                if($sql)
                {
                    for($i=0;$i<count($request['annual_fee']);$i++)
                    {
                        $annual_fee = new AnnualFee;
                        $annual_fee->member_id = $sql->id;
                        $annual_fee->annual_fee = $request['annual_fee'][$i];;
                        $annual_fee->exp_date = $request['exp_date'][$i];
                        $annual_fee->save();
                    }
                }

            return redirect()->route('members.index')
                ->with('success', 'Member Create Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::with('memberType','category','businessType')->find($id);
        $annual_fees = AnnualFee::where('member_id',$id)->get();
        return view('backend.members.detail',compact('member','annual_fees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        $member_types = MemberType::all();
        $categories = Category::all();
        $annual_fees = AnnualFee::where('member_id',$id)->paginate(12);
        $business_types = BusinessType::all();

        return view('backend.members.edit',compact('member','member_types','categories','annual_fees','business_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sql = Member::findOrFail($id);

            if($sql->photo != null && $request->file("photo")){
                if(file_exists(public_path('photos/members/'.$sql->photo))){

                    unlink('photos/members/'.$sql->photo);

                }
            }

            if($request->file("photo")) {
                $file=$request->file("photo");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/members');
                $file->move($path, $filename);

                $sql->photo = $filename;
            }

            $sql->name = $request->name;
                $sql->father_name = $request->father_name;
                $sql->birth_date = $request->birth_date;
                $sql->birth_place = $request->birth_place;
                $sql->nationality = $request->nationality;
                $sql->nrc = $request->nrc;
                $sql->edu = $request->edu;
                $sql->occupation = $request->occupation;
                $sql->resident_no = $request->resident_no;
                $sql->resident_street = $request->resident_street;
                $sql->resident_township = $request->resident_township;
                $sql->resident_city = $request->resident_city;
                $sql->resident_state = $request->resident_state;
                $sql->postal_code = $request->postal_code;
                $sql->phone = $request->phone;
                $sql->member_id = $request->member_id;
                $sql->member_type_id = $request->member_type_id;
                $sql->company_name = $request->company_name;
                $sql->registration_no_date = $request->registration_no_date;
                $sql->business_name = $request->business_name;
                $sql->business_no_date = $request->business_no_date;
                $sql->paid_capital = $request->paid_capital;
                $sql->employee_no = $request->employee_no;
                $sql->contact_person = $request->contact_person;
                $sql->designaion = $request->designaion;
                $sql->office_no = $request->office_no;
                $sql->office_street = $request->office_street;
                $sql->office_ward = $request->office_ward;
                $sql->office_township = $request->office_township;
                $sql->office_city = $request->office_city;
                $sql->office_state = $request->office_state;
                $sql->office_phone = $request->office_phone;
                $sql->fax = $request->fax;
                $sql->viber = $request->viber;
                $sql->website = $request->website;
                $sql->business_type_id = $request->business_type_id;
                $sql->business_text = $request->business_text;
                // $sql->contact_person = $request->contact_person;
                $sql->ms_no = $request->ms_no;
                $sql->ms_date = $request->ms_date;
                // $sql->member_type_id = $request->member_type_id;
                $sql->category_id = $request->category_id;
                //
                $sql->business_reg = $request->business_reg;
                $sql->business_regdate = $request->business_regdate;
                $sql->company_name_address = $request->company_name_address;
                $sql->product_item = $request->product_item;
                // $sql->phone_no = $request->phone_no;
                // $sql->fax = $request->fax;
                $sql->email = $request->email;
                $sql->entrance_fee = $request->entrance_fee;
                $sql->name_address_myan = $request->name_address_myan;
                $sql->ms_no_myan = $request->ms_no_myan;
                $sql->ms_date_myan = $request->ms_date_myan;
                $sql->phone_myan = $request->phone_myan;
                $sql->fax_myan = $request->fax_myan;
                $sql->nrc_myan = $request->nrc_myan;
                $sql->business_reg_myan = $request->business_reg_myan;
                $sql->business_regdate_myan = $request->business_regdate_myan;
                $sql->save();

            if($sql)
            {
                if(isset($request['annual_fee']))
                {
                    if(count($request['annual_fee']) > 0)
                    {
                        for($i=0;$i<count($request['annual_fee']);$i++)
                        {
                            if(isset($request['annual_fee_id'][$i]))
                            {
                                $additional['annual_fee'] = $request['annual_fee'][$i];
                                $additional['exp_date'] = $request['exp_date'][$i];
                                $update_additional = AnnualFee::where('id',$request['annual_fee_id'][$i])
                                                    ->update($additional);
                            }
                        }
                    }
                }
            }

            return redirect()->route('members.index')
                ->with('success', 'Member Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sql = Member::findOrFail($id);

        if($sql->photo != null){
            if(file_exists(public_path('photos/members/'.$sql->photo))){

                unlink('photos/members/'.$sql->photo);

            }
        }

        Member::where('id',$id)->delete();
        AnnualFee::where('member_id',$id)->delete();
        return back()->with('success','Member Delete Successfully!');
    }

    public function approve(Request $request,$id)
    {
        $member = Member::find($id);
        $member->status = 1;
        $member->save();

        if($member){
            $user = User::where('email',$member->email)->first();
            if($user){
            $user->status = 1;
            $user->save();
            }
        }

        return redirect()->back()
                ->with('success', 'Approve successfully!');
    }

    public function approveAll()
    {
        // $students = Student::where('approve_status',0)->get();
        $additional['status'] = 1;
        $update_additional = Member::where('status',0)->update($additional);


        // $users = User::where('status',0)->get();
        $adding['status'] = 1;
        $update_adding = User::where('status',0)->update($adding);

        return redirect()->back()
                ->with('success', 'Approve All successfully!');
    }

    public function certificate($id)
    {
        $member = Member::find($id);
        if($member->ms_date_myan)
        {
            $strArray = explode('-',$member->ms_date_myan);
            $ms_year = $strArray[2];
            $ms_month = $strArray[1];
            $ms_date = $strArray[0];
        }else{
            $ms_year = "-";
            $ms_month = "-";
            $ms_date = "-";
        }

        return view('backend.members.certificate',compact('member','ms_year','ms_month','ms_date'));
    }

    public function memberCard($id)
    {
        $member = Member::find($id);
        $member_types = MemberType::all();
        $categories = Category::all();
        $business_types = BusinessType::all();
        $today = Carbon::now();
        $annual_fee = AnnualFee::where('member_id',$id)
                                ->where('exp_date','>',$today)->first();

        return view('backend.members.member_card',compact('member','member_types','categories','annual_fee','business_types'));
    }

    public function memberExport()
    {
        return Excel::download(new MembersExport, 'members.xlsx');
    }

    public function memberImport(Request $request)
    {
        $member_excel = $request->member_excel;
        Excel::import(new MembersImport,$member_excel);
        return redirect()->back()->with('success', 'Excel Import is successful!');
    }

    public function activeMember()
    {
        $today = Carbon::now();
        $annual_fees = AnnualFee::where('exp_date','>',$today)->get();
        // dd($annual_fees);
        return view('backend.members.active_member',compact('annual_fees'));
    }

    public function nearExpiredMember()
    {
        $today = Carbon::now();
        $months = $today->addMonths(1);
        // dd($months);
        // where('exp_date','<',$months)

        $annual_fees = AnnualFee::whereBetween('exp_date',[Carbon::now(),$months])
                                ->get();
        //dd($annual_fees);
        return view('backend.members.near_expired_member',compact('annual_fees'));
    }

    public function sendNearMail($id)
    {
        $member = Member::findOrFail($id);
        $mail = $member->email;
        //dd($mail);
        Mail::to($mail)
                ->send(new NearMemberMail());
        return redirect()->back()->with('success', 'Sending Near Expired Mail is successful!');;
    }

    public function expiredMember()
    {
        $today = Carbon::now();
        $annual_fees = AnnualFee::where('exp_date','<',$today)->get();
        return view('backend.members.expired_member',compact('annual_fees'));
    }

    public function sendMail($id)
    {
        $member = Member::findOrFail($id);
        $mail = $member->email;
        //dd($mail);
        Mail::to($mail)
                ->send(new MemberMail());
        return redirect()->back()->with('success', 'Sending Mail is successful!');;
    }

    public function increaseLimit($id)
    {
        $member = LimitMembers::find($id);
        // $userRole = $user->roles->pluck('name','name')->first();
        return view('backend.members.increase_limit',compact('member'));
    }

    public function increaseLimitAdd(Request $request,$id)
    {
        $member = LimitMembers::find($id);
        $member->limit_member = $request->limit_member;
        $member->save();

        return redirect()->route('members.index')->with('success','Limit Increase Successfully.');
    }
}
