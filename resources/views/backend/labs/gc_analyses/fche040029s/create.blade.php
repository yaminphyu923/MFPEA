@extends('backend.main')

@section('lab-active', 'active')

@section('fche040029-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040029.index') }}">
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
                        <h4 class="text-center py-2"><b>FIDSL-Che-04-00/29</b></h4>
                    </div>

                    <form action="{{ route('fche040029.store') }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
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
                                        <label for="" class="col-sm-4">Sample Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name" class="form-control"
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
                                                value="GC-FID Method (AOAC,  )">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="test">
                                <div class="row">
                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="test_parameter[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="first_test[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="sec_test[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2 my-0">
                                        <button type="button" class="btn btn-sm submit-button" onclick="add()"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_weight" class="form-control"
                                                value="Weight of sample">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sample_weight_1" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sample_weight_2" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="koh_volume" class="form-control"
                                                value="Volume of Methanoic KOH">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="koh_volume_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="koh_volume_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="koh_heating_time" class="form-control"
                                                value="Times for heating (waterbath)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="koh_heating_time_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="koh_heating_time_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="boron_volume" class="form-control"
                                                value="Volume of Boron Trifluoride Methanol">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="boron_volume_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="boron_volume_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="boron_heating_time" class="form-control"
                                                value="Times for heating (waterbath)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="boron_heating_time_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="boron_heating_time_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="potassium_weight" class="form-control"
                                                value="Weight of Potassium sulfate (GC-Grade)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="potassium_weight_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="potassium_weight_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="water_volume" class="form-control"
                                                value="Volume of water">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="water_volume_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="water_volume_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="petro_volume" class="form-control"
                                                value="Volume of Petroleum Ether (GC-Grade)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="petro_volume_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="petro_volume_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="chlo_volume" class="form-control"
                                                value="Volume of Chloroform (GC-Grade)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="chlo_volume_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="chlo_volume_2" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed by Sign</label>

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
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analysed_name" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked by Sign</label>

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

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_name" class="form-control"
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
                '<label for="" class="col-sm-6 text-md-end">Test Parameter </label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="test_parameter[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">1<sup>st</sup> Test </label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="first_test[]" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +

                '<div class="col-sm-3">' +
                '<div class="form-group row">' +
                '<label for="" class="col-sm-6 text-md-end">2<sup>nd</sup> Test </label>' +

                '<div class="col-sm-6">' +
                '<input type="text" name="sec_test[]" class="form-control">' +
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
