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
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-list"></i>
                                <b>List</b></button>
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
                        <h4 class="text-center py-2"><b>FIDSL-03-M-06</b></h4>
                    </div>

                    <form action="{{ route('f03m06.store') }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control">
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
                                            <input type="date" name="received_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Initiated for Analysis</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="initiated_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Reported</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="reported_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Incubation Period</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="period" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Food Homogenate</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="homogenate" class="form-control"
                                                value="25g of sample +225 ml of phosphate buffer">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="method" class="form-control"
                                                value="FDA/BAM Online Method (Chapter 18, April 2001)">
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
                                            <input type="text" name="zero_plate1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="zero_plate2" class="form-control">
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
                                            <input type="text" name="minus_one_plate1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_one_plate2" class="form-control">
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
                                            <input type="text" name="minus_two_plate1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_two_plate2" class="form-control">
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
                                            <input type="text" name="minus_three_plate1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_three_plate2" class="form-control">
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
                                            <input type="text" name="minus_four_plate1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_four_plate2" class="form-control">
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
                                            <input type="text" name="minus_five_plate1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Plate 2</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="minus_five_plate2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Yeast and Mould Count</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="yeast_mould" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analysed_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="analysed_sign" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysed_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="checked_sign" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="checked_date" class="form-control">
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
