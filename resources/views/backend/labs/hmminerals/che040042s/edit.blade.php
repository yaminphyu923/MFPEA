@extends('backend.main')

@section('lab-active', 'active')

@section('che040042-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('che040042.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

                        {{-- <a href="{{ route('car0501-test.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-clipboard-list"></i> <b>Test
                                    Parameter</b></button>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Edit FIDSL-Che-04-01/42</b></h4>
                    </div>

                    <form action="{{ route('che040042.update', $che->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" autocomplete="off"
                                                value="{{ $che->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name" class="form-control" autocomplete="off"
                                                value="{{ $che->sample_name }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Customer Name</label>

                                        <div class="col-sm-8">
                                            <select name="customer_id" class="form-control myselect">
                                                <option>Select an option...</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}"
                                                        @if ($customer->id == $che->customer_id) selected @endif>
                                                        {{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control"
                                                autocomplete="off" value="{{ $che->received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Initiated for Analysis</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="initiated_date" class="form-control"
                                                autocomplete="off" value="{{ $che->initiated_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Reported</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="reported_date" class="form-control"
                                                autocomplete="off" value="{{ $che->reported_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="method_id" class="form-control"
                                                value="{{ $che->method_id }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="test">

                                @foreach ($che_tests as $che_test)
                                    <div class="row">
                                        <input type="hidden" name="che_test_id[]" value="{{ $che_test->id }}">

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-6">Test Parameter</label>

                                                <div class="col-sm-6">
                                                    <input type="text" name="test_parameter[]" class="form-control"
                                                        autocomplete="off" value="{{ $che_test->test_parameter }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="first_test[]" class="form-control"
                                                        autocomplete="off" value="{{ $che_test->first_test }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="sec_test[]" class="form-control"
                                                        autocomplete="off" value="{{ $che_test->sec_test }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </div> --}}

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="weight" class="form-control"
                                                value="{{ $che->weight }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="weight_1" class="form-control"
                                                value="{{ $che->weight_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="weight_2" class="form-control"
                                                value="{{ $che->weight_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="nitric_volume" class="form-control"
                                                value="{{ $che->nitric_volume }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="nitric_volume_1" class="form-control"
                                                value="{{ $che->nitric_volume_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="nitric_volume_2" class="form-control"
                                                value="{{ $che->nitric_volume_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="hydrogen_volume" class="form-control"
                                                value="{{ $che->hydrogen_volume }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="hydrogen_volume_1" class="form-control"
                                                value="{{ $che->hydrogen_volume_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="hydrogen_volume_2" class="form-control"
                                                value="{{ $che->hydrogen_volume_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="volume" class="form-control"
                                                value="{{ $che->volume }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="volume_1" class="form-control"
                                                value="{{ $che->volume_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="volume_2" class="form-control"
                                                value="{{ $che->volume_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="df" class="form-control"
                                                value="{{ $che->df }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="df_1" class="form-control"
                                                value="{{ $che->df_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="df_2" class="form-control"
                                                value="{{ $che->df_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sd" class="form-control"
                                                value="{{ $che->sd }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sd_1" class="form-control"
                                                value="{{ $che->sd_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sd_2" class="form-control"
                                                value="{{ $che->sd_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="concentration" class="form-control"
                                                value="{{ $che->concentration }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="concentration_1" class="form-control"
                                                value="{{ $che->concentration_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="concentration_2" class="form-control"
                                                value="{{ $che->concentration_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="reagent" class="form-control"
                                                value="{{ $che->reagent }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="reagent_1" class="form-control"
                                                value="{{ $che->reagent_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="reagent_2" class="form-control"
                                                value="{{ $che->reagent_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="real_concentration" class="form-control"
                                                value="{{ $che->real_concentration }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="real_concentration_1" class="form-control"
                                                value="{{ $che->real_concentration_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="real_concentration_2" class="form-control"
                                                value="{{ $che->real_concentration_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Data</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cd" class="form-control"
                                                value="{{ $che->cd }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">1<sup>st</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="cd_1" class="form-control"
                                                value="{{ $che->cd_1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">2<sup>nd</sup> Test</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="cd_2" class="form-control"
                                                value="{{ $che->cd_2 }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control" autocomplete="off"
                                                value="{{ $che->remark }}">
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
                                                autocomplete="off" value="{{ $che->analysed_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analysed_name" class="form-control"
                                                autocomplete="off" value="{{ $che->analysed_name }}">
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
                                                autocomplete="off" value="{{ $che->checked_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_name" class="form-control"
                                                autocomplete="off" value="{{ $che->checked_name }}">
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
            $.ajax({
                url: "{{ route('test-increase') }}",
                type: "GET",

                success: function(res) {
                    //console.log(res);

                    // let data = [];

                    // res.tests.forEach(function(value, key) {
                    //     //console.log(value);
                    //     data.push({
                    //         id: value.id,
                    //         test: value.test,
                    //     });
                    // });

                    // console.log(data);
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
                        '<label for="" class="col-sm-6 text-md-end">Test Method </label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="test_method[]" class="form-control">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +

                        '<div class="col-sm-3">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Result </label>' +

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


                }
            })

        }

        function remove(row) {
            $(".row_" + row).remove();
            count--;
        }
    </script>

@endsection
