@extends('backend.main')

@section('user_management-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Edit Permissions</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('permissions.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    {{-- <div class="card-header">
                        <h4 class="text-center py-2"><b>F-Car-05-00</b></h4>
                    </div> --}}

                    <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">

                            <div class="form-group row offset-sm-1 mt-5">
                                <label for="name" class="col-sm-2">Permission :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $permission->name }}" autocomplete="off">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 my-0 text-center mb-3">
                                    <button type="submit" class="btn btn-md w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Update</b></button>
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
