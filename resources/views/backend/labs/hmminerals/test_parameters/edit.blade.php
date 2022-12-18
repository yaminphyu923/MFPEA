@extends('backend.main')

@section('lab-active', 'active')

{{-- @section('car0501-active', 'active') --}}

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('car0500.create') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Edit Human Metals and Minerals (Test Parameter)</b></h4>
                    </div>

                    <form action="{{ route('hmm-test.update', $test->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 offset-sm-1">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="test_parameter" class="form-control"
                                                autocomplete="off" value="{{ $test->test_parameter }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 my-0 text-center">
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
