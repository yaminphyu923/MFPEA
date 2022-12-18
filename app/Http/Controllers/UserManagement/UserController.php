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
        $users = User::all();
        return view('backend.user_managements.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
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
        $roles = Role::pluck('name','name')->all();
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

            $sql->contact_person = $request->contact_person;
            $sql->ms_no = $request->ms_no;
            $sql->member_type_id = $request->member_type_id;
            $sql->category_id = $request->category_id;
            $sql->company_name_address = $request->company_name_address;
            $sql->product_item = $request->product_item;
            $sql->phone_no = $request->phone_no;
            $sql->fax = $request->fax;
            $sql->email = $request->email;
            $sql->entrance_fee = $request->entrance_fee;
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
}
