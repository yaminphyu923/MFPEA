@extends('backend.main')

@section('lab-active', 'active')

@section('fche040064-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040064.index') }}">
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
                        <h4 class="text-center py-2"><b>FIDSL-Che-04-00/64</b></h4>
                    </div>

                    <form action="{{ route('fche040064.store') }}" method="POST" enctype="multipart/form-data"
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
                                        <label for="" class="col-sm-4">Product Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="product_name" class="form-control">
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
                                        <label for="" class="col-sm-4">Date Initiated for Analysis</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="initiated_date" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Reported</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="reported_date" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="method" class="form-control"
                                                value="Turbidity Meter (HACH-2100Q)">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="calibration" class="form-control"
                                                value="Calibration solution">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="calibration_test1" class="form-control"
                                                value="10-20-100-800 NTU">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="calibration_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="dilution" class="form-control"
                                                value="Sample dilution">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="dilution_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="dilution_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="reading" class="form-control"
                                                value="Reading Data">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="reading_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="reading_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="result" class="form-control" value="Result">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="result_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="result_test2" class="form-control">
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
                                        <label for="" class="col-sm-4">Analysed By Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="analysed_sign" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed By Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysed_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed By Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analysed_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="checked_sign" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="checked_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_name" class="form-control">
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
