@extends('backend.main')

@section('lab-active', 'active')

@section('m010101-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('m010101.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-list"></i>
                                <b>List</b></button>
                        </a>

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
                        <h4 class="text-center py-2"><b>F-M01-01-01</b></h4>
                    </div>

                    <form action="{{ route('m010101.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysis_date" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Description</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="description" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Report Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="report_date" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Incubation hours</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="incubation_hours" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Reference Method</label>

                                        <div class="col-sm-8">
                                            <textarea name="reference_method" id="reference_method" cols="30" rows="1" class="form-control">AOAC Official Method 990.12. Aerobic Plate Count in Foods, Dry Rehydratable Film (Petrifilm TM Aerobic Count Plate) method with the modification according to ISO standards</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample homogenate</label>

                                        <div class="col-sm-4">
                                            <input type="text" name="sample_homogenate" class="form-control"
                                                autocomplete="off">
                                            <label for="">of sample</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="diluent_homogenate" class="form-control"
                                                autocomplete="off">
                                            <label for="">ml of diluent</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="test">
                                <div class="row">
                                    {{-- <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parmeter</label>

                                            <div class="col-sm-6">
                                                <select name="test_parameter[]" id="" class="form-control myselect">
                                                    <option>Select an option...</option>
                                                    @foreach ($car_tests as $car_test)
                                                        <option value="{{ $car_test->id }}">
                                                            {{ $car_test->test_parameter }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Dilution</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="dilution[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Plate 1</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="plate1[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Plate 2</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="plate2[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2 my-0">
                                        <button type="button" class="btn btn-sm submit-button" onclick="add()"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Calculation</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="calculation" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="result" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analyzed By</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analyzed_by" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analyzed Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analyzed_position" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analyzed Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="analyzed_sign" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analyzed Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analyzed_date" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_by" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_position" class="form-control"
                                                autocomplete="off">
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
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12 my-0 text-center">
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

    <script>
        var count = 1;

        function add() {
            var row = count + 1;
            count++;
            // $.ajax({
            //     url: "{{ route('test-increase') }}",
            //     type: "GET",

            //     success: function(res) {
            //console.log(res);

            $(".test").append(
                '<div class="mt-1 row row_' + row + '">' +
                // '<div class="col-sm-4">' +
                // '<div class="form-group row">' +
                // '<label for="" class="col-sm-6 text-md-end text-right">Test Parameter </label>' +

                // '<div class="col-sm-6">' +
                // '<select name="test_parameter[]" class="form-control" id="test_parameter' + row +
                // '">' +
                // '<option></option>' +
                // '</select>' +
                // '</div>' +
                // '</div>' +
                // '</div>' +

                '<div class="col-sm-4">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">Dilution </label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="dilution[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">Plate 1</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="plate1[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">Plate 2</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="plate2[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-1">' +
                '<button type="button" onClick="remove(' + row +
                ')" class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></button>' +

                '</div>' +
                '</div>'
            );

            // $.each(res, function(key, value) {
            //     //console.log(value);
            //     // $("#test_parameters" + row).append('<option value="' + value.tests +
            //     //     '">' + value
            //     //     .tests + '</option>')

            //     $("#test_para" + row).val(value.test);
            // });

            $("#test_parameter" + row).select2({
                data: res.tests
            });


            //     }
            // })

        }

        function remove(row) {
            $(".row_" + row).remove();
            count--;
        }
    </script>

@endsection
