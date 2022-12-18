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
                        <h4 class="text-center py-2"><b>Detail Role</b></h4>
                    </div>

                    <div class="card-body">
                        <div class="col-xs-6 offset-xs-3 col-sm-6 offset-sm-3 col-md-6 offset-md-3 my-3">
                            <strong class="text-warning">Name:</strong>
                            {{ $role->name }}
                        </div>
                        <div class="col-xs-6 offset-xs-3 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
                            <strong class="text-warning">Permissions:</strong>
                            <ol>
                                @if (!empty($rolePermissions))
                                    @foreach ($rolePermissions as $v)
                                        <li>{{ $v->name }}</li>
                                    @endforeach
                                @endif
                            </ol>
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
