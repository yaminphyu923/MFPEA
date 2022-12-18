@extends('backend.main')

@section('lab-active', 'active')

@section('f05-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('f05.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
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
                        <h4 class="text-center py-2"><b>Edit F-CAR-05-01</b></h4>
                    </div>

                    <form action="{{ route('f05.update', $f05->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" autocomplete="off"
                                                value="{{ $f05->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Report No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="report_no" class="form-control" autocomplete="off"
                                                value="{{ $f05->report_no }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Issue Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="issue_date" class="form-control" autocomplete="off"
                                                value="{{ $f05->issue_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysis_date" class="form-control"
                                                autocomplete="off" value="{{ $f05->analysis_date }}">
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Results</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="results" class="form-control" autocomplete="off"
                                                value="{{ $f05->results }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="test">
                                @foreach ($f05_tests as $f05_test)
                                    <input type="hidden" name="f05_test_id[]" value="{{ $f05_test->id }}">
                                    <div class="row">
                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-6">Test Parameter</label>

                                                <div class="col-sm-6">
                                                    <input type="text" name="test_parameter[]" class="form-control"
                                                        autocomplete="off" value="{{ $f05_test->test_parameter }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="method[]" class="form-control"
                                                        autocomplete="off" value="{{ $f05_test->method }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Result</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="result[]" class="form-control"
                                                        autocomplete="off" value="{{ $f05_test->result }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="col-sm-2 my-0">
                                            <button type="button" class="btn btn-sm submit-button" onclick="add()"><i
                                                    class="fas fa-plus"></i></button>
                                        </div> --}}
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remarks</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remarks" class="form-control" autocomplete="off"
                                                value="{{ $f05->remarks }}">
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
                                            <input type="text" name="name" class="form-control" autocomplete="off"
                                                value="{{ $f05->name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="position" class="form-control"
                                                autocomplete="off" value="{{ $f05->position }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check1" class="form-control" autocomplete="off"
                                                value="{{ $f05->check1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check2" class="form-control" autocomplete="off"
                                                value="{{ $f05->check2 }}">
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
                '<label for="" class="col-sm-6 text-md-end">Test Method</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="reference_method[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">Result</label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="test_result[]" class="form-control">' +
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
