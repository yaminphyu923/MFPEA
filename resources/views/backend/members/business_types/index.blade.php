@extends('backend.main')

@section('member-active', 'active')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>Business Type List</small></b></h4>
                    <div class="justify-content-end">
                        <button type="button" class="btn btn-md btn-primary btn-theme" data-toggle="modal"
                            data-target="#business"><i class="fas fa-plus-circle"></i>
                            <b>Add</b></button>

                        <a href="{{ route('members.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

                        <div class="modal fade" id="business" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('business-types.store') }}" method="POST" autocomplete="off">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Business Type</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row mx-2">
                                                <label for="business_type_name">Business Type</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="business_type_name" id="business_type_name"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            {{-- <div class="col-sm-9">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            </div> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-theme"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-theme">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="datatable table table-stripped table-hover">
                    <thead class="btn-theme text-white">
                        <tr>
                            <th>No.</th>
                            <th>Business Type</th>
                            <th>Edit Business Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($business_types as $business_type)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $business_type->business_type_name }}</td>
                                <td>
                                    <form action="{{ route('business-types.update', $business_type->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <input type="text" name="business_type_name" id="business_type_name"
                                                    value="{{ $business_type->business_type_name }}" class="form-control">
                                            </div>
                                            {{-- <div>
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            </div> --}}
                                            <div class="col-sm-3 mt-1">
                                                <button type="submit" class="btn btn-md btn-warning py-2 btn-theme"><i
                                                        class="fas fa-edit"></i> Update</button>
                                            </div>
                                        </div>

                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('business-types.destroy', $business_type->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger btn-theme btn-md py-2" type="submit"
                                            id="{{ $business_type->id }}">
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
