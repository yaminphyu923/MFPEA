@extends('backend.main')

@section('lab-active', 'active')

@section('f03m06-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('f03m06.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

                        {{-- <a href="{{ route('hmm-method.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-clipboard-list"></i>
                                <b>Method</b></button>
                        </a> --}}

                        {{-- <a href="{{ route('hmm-test.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-clipboard-list"></i>
                                <b>Test Parameter</b></button>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Edit FIDSL-03-M-06</b></h4>
                    </div>

                    <form action="{{ route('f03m06.update', $f03m06->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" autocomplete="off"
                                                value="{{ $f03m06->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Product Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="product_name" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->product_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Initiated for Analysis</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="initiated_date" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->initiated_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Reported</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="reported_date" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->reported_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Incubation Period</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="period" class="form-control" autocomplete="off"
                                                value="{{ $f03m06->period }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Food Homogenate</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="homogenate" class="form-control" autocomplete="off"
                                                value="{{ $f03m06->homogenate }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="method" class="form-control" autocomplete="off"
                                                value="{{ $f03m06->method }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 my-0">
                                    <h6>10<sup>0</sup> Dilution</h6>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 1</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="zero_plate1" class="form-control"
                                                value="{{ $f03m06->zero_plate1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="zero_plate2" class="form-control"
                                                value="{{ $f03m06->zero_plate2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-2 my-0">
                                    <h6>10<sup>-1</sup> Dilution</h6>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 1</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_one_plate1" class="form-control"
                                                value="{{ $f03m06->minus_one_plate1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_one_plate2" class="form-control"
                                                value="{{ $f03m06->minus_one_plate2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-2 my-0">
                                    <h6>10<sup>-2</sup> Dilution</h6>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 1</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_two_plate1" class="form-control"
                                                value="{{ $f03m06->minus_two_plate1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_two_plate2" class="form-control"
                                                value="{{ $f03m06->minus_two_plate2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-2 my-0">
                                    <h6>10<sup>-3</sup> Dilution</h6>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 1</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_three_plate1" class="form-control"
                                                value="{{ $f03m06->minus_three_plate1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_three_plate2" class="form-control"
                                                value="{{ $f03m06->minus_three_plate2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-2 my-0">
                                    <h6>10<sup>-4</sup> Dilution</h6>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 1</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_four_plate1" class="form-control"
                                                value="{{ $f03m06->minus_four_plate1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_four_plate2" class="form-control"
                                                value="{{ $f03m06->minus_four_plate2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-2 my-0">
                                    <h6>10<sup>-5</sup> Dilution</h6>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 1</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_five_plate1" class="form-control"
                                                value="{{ $f03m06->minus_five_plate1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_five_plate2" class="form-control"
                                                value="{{ $f03m06->minus_five_plate2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Yeast and Mould Count</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="yeast_mould" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->yeast_mould }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analysed_name" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->analysed_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="analysed_sign" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysed_date" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->analysed_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_by" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->checked_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="checked_sign" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="checked_date" class="form-control"
                                                autocomplete="off" value="{{ $f03m06->checked_date }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
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

@section('script')


@endsection
