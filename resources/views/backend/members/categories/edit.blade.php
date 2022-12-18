@extends('backend.main')

@section('member-active', 'active')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>Edit Category</b></h4>
                    <div class="justify-content-end">
                        <a href="{{ route('categories.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <form action="{{ route('categories.update', $category->id) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="row mt-5">

                    <div class="col-sm-12 mb-2">
                        <div class="form-group row">
                            <label for="name" class="control-label ml-3"><b> Category Name</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="name" id="name" value="{{ $category->name }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <div class="form-group row">
                            <label for="group_id" class="control-label ml-3"><b>
                                    Group</b></label>
                            <div class="col-sm-12">
                                <select name="group_id" id="group_id" class="myselect form-control">
                                    <option>Select an option...</option>
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}"
                                            @if ($group->id == $category->group_id) selected @endif>
                                            {{ $group->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-md btn-info btn-theme w-25">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
