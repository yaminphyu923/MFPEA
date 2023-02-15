@extends('backend.main')

@section('user_management-active', 'active')

@section('content')
    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="card">
                    <div class="card-header btn-theme text-white d-flex justify-content-between">
                        <p>Change Password</p>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('users.index') }}"><button type="button"
                                    class="btn btn-danger light-color mr-1">Back</button></a>
                        </div>
                    </div>

                    <form action="{{ route('change_password', $id) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')

                        <div class="card-body">

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Old
                                        Password</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input id="old_password" type="password"
                                        class="form-control @error('old_password') is-invalid @enderror" name="old_password"
                                        required placeholder="Old Password...">

                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>New
                                        Password</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input id="new_password" type="password"
                                        class="form-control @error('new_password') is-invalid @enderror" name="new_password"
                                        required placeholder="New Password...">

                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Confirm
                                        Password</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input id="confirm_password" type="password"
                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                        name="confirm_password" required placeholder="Confirm Password...">

                                    @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-10 offset-sm-2 my-0 text-center mb-3">
                                    <button type="submit" class="btn btn-md btn-success w-50 btn-theme"><i
                                            class="fas fa-key"></i> <b>Change Password</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
@endsection
