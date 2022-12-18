@extends('backend.main')

@section('lab-active', 'active')

@section('ad-0201-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('aw-ad0201.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card btn-theme text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>FIDSL-Ad-02-01</b></h4>
                    </div>

                    <form action="{{ route('aw-ad0201.update', $ad->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" autocomplete="off"
                                                value="{{ $ad->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name/Code</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name_code" class="form-control"
                                                autocomplete="off" value="{{ $ad->sample_name_code }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Description</label>

                                        <div class="col-sm-8">
                                            <textarea name="sample_description" id="sample_description" cols="30" rows="1" class="form-control">{{ $ad->sample_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Type</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_type" class="form-control" autocomplete="off"
                                                value="{{ $ad->sample_type }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Amount</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_amount" class="form-control"
                                                autocomplete="off" value="{{ $ad->sample_amount }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Temperature on Arrival</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="arrival_temperature" class="form-control"
                                                autocomplete="off" value="{{ $ad->arrival_temperature }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Packaging Type</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="pakaging_type" class="form-control"
                                                autocomplete="off" value="{{ $ad->pakaging_type }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Physical Condition of Package</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="physical_condition_package" class="form-control"
                                                autocomplete="off" value="{{ $ad->physical_condition_package }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Admin Receiver</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="admin_receiver" class="form-control"
                                                autocomplete="off" value="{{ $ad->admin_receiver }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Received by Admin</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="admin_date_received" class="form-control"
                                                autocomplete="off" value="{{ $ad->admin_date_received }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Received by Lab</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="lab_date_received" class="form-control"
                                                autocomplete="off" value="{{ $ad->lab_date_received }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Lab. Receiver</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="lab_receiver" class="form-control"
                                                autocomplete="off" value="{{ $ad->lab_receiver }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4"> Lab. Received</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="chemical" name="lab_received" value="Chemical"
                                                @if ($ad->lab_received == 'Chemical') checked @endif>
                                            <label for="chemical" class="mr-2">Chemical</label>

                                            <input type="radio" id="microbiology" name="lab_received"
                                                value="Microbiology" @if ($ad->lab_received == 'Microbiology') checked @endif>
                                            <label for="microbiology" class="mr-2">Microbiology</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method of Storage</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="room" name="storage_method"
                                                value="Room Temperature" @if ($ad->storage_method == 'Room Temperature') checked @endif>
                                            <label for="room" class="mr-2">Room Temperature</label>

                                            <input type="radio" id="refrigeration" name="storage_method"
                                                value="Refrigeration" @if ($ad->storage_method == 'Refrigeration') checked @endif>
                                            <label for="refrigeration" class="mr-2">Refrigeration</label>

                                            <input type="radio" id="freezing" name="storage_method" value="Freezing"
                                                @if ($ad->storage_method == 'Freezing') checked @endif>
                                            <label for="freezing">Freezing</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Type of Test</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="test_type" class="form-control"
                                                autocomplete="off" value="{{ $ad->test_type }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Duration to be performed</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="performed_duration" class="form-control"
                                                autocomplete="off" value="{{ $ad->performed_duration }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Disposal Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="disposal_date" class="form-control"
                                                autocomplete="off" value="{{ $ad->disposal_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Prepared by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="prepared_by" class="form-control"
                                                autocomplete="off" value="{{ $ad->prepared_by }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Prepared Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="prepared_position" class="form-control"
                                                autocomplete="off" value="{{ $ad->prepared_position }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Verified by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="verified_by" class="form-control"
                                                autocomplete="off" value="{{ $ad->verified_by }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Verified Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="verified_position" class="form-control"
                                                autocomplete="off" value="{{ $ad->verified_position }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 my-0 text-center">
                                    <button type="submit" class="btn btn-md btn-success w-25 submit-button"><i
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
