@extends('backend.main')

@section('user_management-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Users</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('users.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Create User</b></h4>
                    </div>

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Name</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="text" name="name" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Email</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="text" name="email" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Password</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="password" name="password" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Confirm
                                        Password</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="password" name="confirm-password" class="form-control"
                                        autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Role</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <select name="roles[]" id="roles" class="form-control">
                                        <option>Select Option...</option>
                                        @foreach ($roles as $key => $role)
                                            <option value="{{ $key }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10 offset-sm-2 my-0 text-center mb-3">
                                    <button type="submit" class="btn btn-md w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Submit</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
