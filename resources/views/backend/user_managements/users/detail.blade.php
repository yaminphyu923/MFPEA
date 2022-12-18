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
                        <h4 class="text-center py-2"><b>Detail User</b></h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table-hover text-white">
                                <thead>
                                    <tr>
                                        <th><b>Name</b></th>
                                        <th>:</th>
                                        <th>{{ $user->name }}</th>

                                    </tr>
                                    <tr>
                                        <th><b>Email</b></th>
                                        <th>:</th>
                                        <th>{{ $user->email }}</th>

                                    </tr>
                                    <tr>
                                        <th><b>Role</b></th>
                                        <th>:</th>
                                        <th><span class="badge bg-success">{{ $userRole }}</span></th>

                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
