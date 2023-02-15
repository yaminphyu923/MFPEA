<?php

namespace App\Http\Controllers\UserManagement;

use Image;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Members\Member;
use App\Models\Members\AnnualFee;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $auth_role_name = auth()->user()->getRoleNames();
        $auth_id = auth()->user()->id;
        $limit_user = auth()->user()->limit_user;
        $count = User::where('created_by',$auth_id)->count();

        if($auth_role_name[0] == 'Superadmin')
        {
        $users = User::all();
        }else{
            $users = [];
            $all_users  = User::get();
            // $users = $users->filter(function($user){
            //     $role_name = $user->getRoleNames();
            //     return $role_name[0] != "Superadmin";
            // });

            foreach($all_users as $user){
                $role_name = $user->getRoleNames();


                if(isset($role_name[0]))
                {
                    if($role_name[0] != "Superadmin"){

                        $users[] = $user;
                    }
                }else{

                    $users[] = $user;

                }

            }
        }
        return view('backend.user_managements.users.index',compact('users','count','limit_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth_role_name = auth()->user()->getRoleNames();
        if($auth_role_name[0] == 'Superadmin')
        {
            $roles = Role::get();
        }else{
            $roles = Role::where('name','!=','Superadmin')->get();
            //dd($roles);
        }
        // $roles = Role::pluck('name','name')->all();
        return view('backend.user_managements.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->status = 1;
            $user->password = Hash::make($request->password);
            $user->created_by = auth()->user()->id;
            $user->save();

            $user->assignRole($request->input('roles'));

            return redirect()->back()
                ->with('success', 'Created successfully!');
        } catch (Exception $e){

            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $userRole = $user->roles->pluck('name','name')->first();
        return view('backend.user_managements.users.detail',compact('user','userRole'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $auth_role_name = auth()->user()->getRoleNames();
        if($auth_role_name[0] == 'Superadmin')
        {
            $roles = Role::get();
        }else{
            $roles = Role::where('name','!=','Superadmin')->get();
            //dd($roles);
        }

        // $roles = Role::pluck('name','name')->all();

        $userRole = $user->roles->pluck('name','name')->first();



        return view('backend.user_managements.users.edit',compact('user','roles','userRole'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $input = $request->all();
            if(!empty($input['password'])){
                $input['password'] = Hash::make($input['password']);
            }else{
                $input = Arr::except($input,array('password'));
            }

            $user = User::find($id);
            $user->update($input);
            DB::table('model_has_roles')->where('model_id',$id)->delete();

            $user->assignRole($request->input('roles'));

            return redirect()->back()
                ->with('success', 'Updated successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function registerWithMember(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirmation',
        ]);

            $sql = new Member;

            if($request->file("photo")) {
                $file=$request->file("photo");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/members');
                $img = Image::make($file->path());
                $img->resize(300, 300, function ($const) {
                $const->aspectRatio();
                })->save($path.'/'.$filename);

                $sql->photo = $filename;
            }

            // $sql->contact_person = $request->contact_person;
            // $sql->ms_no = $request->ms_no;
            // $sql->member_type_id = $request->member_type_id;
            // $sql->category_id = $request->category_id;
            // $sql->company_name_address = $request->company_name_address;
            // $sql->product_item = $request->product_item;
            // $sql->phone_no = $request->phone_no;
            // $sql->fax = $request->fax;
            // $sql->email = $request->email;
            // $sql->entrance_fee = $request->entrance_fee;
            // $sql->status = $request->status;


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
            $sql->email = $request->email;
            $sql->status = $request->status;
            $sql->save();
            // if($sql)
            // {
            //     for($i=0;$i<count($request['annual_fee']);$i++)
            //     {
            //         $annual_fee = new AnnualFee;
            //         $annual_fee->member_id = $sql->id;
            //         $annual_fee->annual_fee = $request['annual_fee'][$i];;
            //         $annual_fee->exp_date = $request['exp_date'][$i];
            //         $annual_fee->save();
            //     }
            // }

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->status = 0;
            $user->password = Hash::make($request->password);
            $user->save();

            $user->assignRole($request->input('roles'));

        return redirect()->back()
            ->with('success', 'Register Successfully!');
    }

    public function increaseCount($id)
    {
        $user = User::find($id);
        $userRole = $user->roles->pluck('name','name')->first();
        return view('backend.user_managements.users.increase_count',compact('user','userRole'));
    }

    public function increaseCountAdd(Request $request,$id)
    {
        $user = User::find($id);

        $user->limit_user = $request->limit_user;
        $user->save();

        return redirect()->route('users.index')->with('success','Count Increase Successfully.');
    }

    public function changePasswordPage($id)
    {
        return view('backend.user_managements.users.change_password',compact('id'));
    }

    public function changePassword(Request $request,$id)
    {

        $this->validate($request,[
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:new_password',
        ]);

        // $current_userid = auth()->user()->id;
        $user = User::select('password')->where('id',$id)->first();

        $db_hash_value = $user->password;

        if(Hash::check($request->old_password,$db_hash_value))
        {
            $user = User::where('id',$id)->first();
            $user->password = Hash::make($request->new_password);
            $user->save();

            // Auth::guard('customer_user')->logout();

            return redirect()->route('users.index')->with('success','Change Password Successfully!');
        }

        return back()->with('notMatch','The old password does not match.Try Again!');
    }
}
