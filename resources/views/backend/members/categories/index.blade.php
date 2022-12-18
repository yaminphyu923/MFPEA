@extends('backend.main')

@section('member-active', 'active')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>Category List</small></b></h4>
                    <div class="justify-content-end">
                        <button type="button" class="btn btn-md btn-primary btn-theme" data-toggle="modal"
                            data-target="#category"><i class="fas fa-plus-circle"></i>
                            <b>Add</b></button>

                        <a href="{{ route('members.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

                        <div class="modal fade" id="category" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('categories.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row mx-2">
                                                <label for="name" class="col-sm-4">Category Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" id="name"
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row mx-2">
                                                <label for="group_id" class="col-sm-4">Group</label>
                                                <div class="col-sm-8">
                                                    <select name="group_id" id="group_id" class="myselect form-control">
                                                        <option>Select an option...</option>
                                                        @foreach ($groups as $group)
                                                            <option value="{{ $group->id }}">{{ $group->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
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
                            <th>Category Name</th>
                            <th>Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->group != null ? $category->group->name : '' }}</td>

                                <td class="d-flex justidy-content-evenly">
                                    <a href="{{ route('categories.edit', $category->id) }}">
                                        <button type="button" class="btn btn-md btn-warning btn-theme py-2"><i
                                                class="fas fa-edit"></i> Edit</button>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger btn-theme btn-md py-2" type="submit"
                                            id="{{ $category->id }}">
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
