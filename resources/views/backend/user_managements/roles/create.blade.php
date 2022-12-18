@extends('backend.main')

@section('user_management-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Roles</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('roles.index') }}">
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
                        <h4 class="text-center py-2"><b>Create Role</b></h4>
                    </div>

                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf

                        <div class="card-body">

                            <div class="form-group row offset-sm-1 mt-5">
                                <label for="name" class="col-sm-2">Name :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-sm-12"><b>Permission</b></label>
                                @foreach ($permissions as $permission)
                                    <div class="col-sm-3">
                                        <input type="checkbox" name="permission[]" value="{{ $permission->id }}">
                                        <label for="" class="ml-2 mr-3">{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-sm-12 my-0 text-center mb-3">
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
