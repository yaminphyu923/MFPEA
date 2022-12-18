@extends('backend.main')

@section('lab-active', 'active')

@section('fcar0500-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fcar0500.index') }}">
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
                        <h4 class="text-center py-2"><b>F-CAR-05-00</b></h4>
                    </div>

                    <form action="{{ route('fcar0500.store') }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" value="C-">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Report No.</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="report_no" class="form-control"
                                                value="ARN-Chemical">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysis_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Issue Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="issue_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="result" class="form-control"
                                                value="Alcohol Impurities">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_para" class="form-control"
                                                value="Biochemical Oxygen Demand (BOD5)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_method" class="form-control"
                                                value="BOD Trak(TM) || Apparatus (Respirometric Method)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_value" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_para" class="form-control"
                                                value="Chemical Oxygen Demand (COD)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_method" class="form-control"
                                                value="HACH-UV-Vis Spectrophotometer (Reactor Digestion Method)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_value" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_para" class="form-control"
                                                value="Oil & Grease">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_method" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_value" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_para" class="form-control" value="pH">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_method" class="form-control"
                                                value="pH meter">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_value" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_para" class="form-control"
                                                value="Total Nitrogen">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_method" class="form-control"
                                                value="HACH-UV-Vis Spectrophotometer (Persulfate Digestion Method)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_value" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_para" class="form-control"
                                                value="Total Phosphorus">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_method" class="form-control"
                                                value="HACH-UV-Vis Spectrophotometer (PhosVer 3 with Persulfate Digestion Method)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_value" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_para" class="form-control"
                                                value="Total Suspended Solid">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_method" class="form-control"
                                                value="Photometric Method (Lovibond Tintometer)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_value" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="sign" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="position" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check2" class="form-control">
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
                '<label for="" class="col-sm-6 text-md-end">Data </label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="data[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">1st Test</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="test1[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">2nd Test</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="test2[]" class="form-control">' +
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
