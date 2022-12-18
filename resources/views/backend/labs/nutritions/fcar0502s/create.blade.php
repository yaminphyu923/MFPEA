@extends('backend.main')

@section('lab-active', 'active')

@section('fcar0502-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fcar0502.index') }}">
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
                        <h4 class="text-center py-2"><b>F-CAR-05-02</b></h4>
                    </div>

                    <form action="{{ route('fcar0502.store') }}" method="POST" enctype="multipart/form-data"
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
                                        <label for="" class="col-sm-4">Analysis Report No</label>

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
                                        <label for="" class="col-sm-4">Results</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="results" class="form-control"
                                                value="Nutrition Package">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture" class="form-control" value="Moisture">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture_ref" class="form-control" value="AOAC,">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash" class="form-control" value="Ash">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash_ref" class="form-control" value="AOAC,">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein" class="form-control"
                                                value="Crude Protein">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein_ref" class="form-control"
                                                value="AOAC,   (Kjeldahl method)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber" class="form-control"
                                                value="Crude Fiber">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber_ref" class="form-control"
                                                value="AOAC,    (Fiber Cap Method)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat" class="form-control"
                                                value="Crude Fat (Ether extract)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat_ref" class="form-control" value="AOAC,">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo" class="form-control"
                                                value="Carbohydrate">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo_ref" class="form-control"
                                                value="By difference">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy" class="form-control"
                                                value="Energy Value (kcal/100g)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy_ref" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na" class="form-control" value="Sodium">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na_ref" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na_result_g" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na_result_ml" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="sign" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="position" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check1" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">1 Package</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="one_package" class="form-control"
                                                value="1package (  )g">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Energy</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="energy_fact" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Protein</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="protein_fact" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Fat</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fat_fact" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Carbohydrate</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="carbo_fact" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sodium</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_fact" class="form-control">
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
                '<label for="" class="col-sm-6 text-md-end">Test Parameter </label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="test_parameter[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">Reference Method</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="method[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">Result</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="result[]" class="form-control">' +
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
