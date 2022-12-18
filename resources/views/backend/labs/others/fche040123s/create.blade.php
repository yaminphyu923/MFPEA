@extends('backend.main')

@section('lab-active', 'active')

@section('fche040123-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040123.index') }}">
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
                        <h4 class="text-center py-2"><b>FIDSL-Che-04-01/23</b></h4>
                    </div>

                    <form action="{{ route('fche040123.store') }}" method="POST" enctype="multipart/form-data"
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
                                                value="Lowenthal's Permanganate Oxidation Process (AOAC,     )">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="sample" class="form-control"
                                                value="Weight of Sample">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="sample_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="sample_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="gelatin" class="form-control"
                                                value="Volume of Gelatin Solution">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="gelatin_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="gelatin_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="kaolin" class="form-control"
                                                value="Weight of Kaolin">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="kaolin_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="kaolin_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="indigo" class="form-control"
                                                value="Volume of Indigo Carmine Solution">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="indigo_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="indigo_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="potassium" class="form-control"
                                                value="Malarity of Potassium Permanganate">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="potassium_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="potassium_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="filtratea" class="form-control"
                                                value="Volume of Titer (KMnO4) for Filtrate a, (A)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="filtratea_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="filtratea_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="filtrateb" class="form-control"
                                                value="Volume of Titer (KMnO4) for Filtrate b, (B)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="filtrateb_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="filtrateb_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="f" class="form-control"
                                                value="f=(        / 0.008)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="f_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="f_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="c" class="form-control"
                                                value="C = (A-4.0) - (B-4.5)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="c_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="c_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="tannin_cal" class="form-control"
                                                value="Tannin (%) = ((0.001664*CXFX)/Real Weight of Sample)*100">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="tannin_cal_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="tannin_cal_test2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="tannin" class="form-control"
                                                value="Tannin (%)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="tannin_test1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="tannin_test2" class="form-control">
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
