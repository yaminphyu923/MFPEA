@extends('backend.main')

@section('lab-active', 'active')

@section('export-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Export Test Report</b></h4>
                        {{-- <a href="{{ route('export_tests.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><b>export Analysis Test
                                    Parameter</b></button>
                        </a> --}}

                        <a href="{{ route('exports.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-list"></i>
                                <b>List</b></button>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card bg-primary text-light">

                        <form action="{{ route('exports.store') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Title</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Company Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="company_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Address</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="address" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Phone</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="phone" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Lab Received Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="lab_received_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Sample Number</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="sample_number" class="form-control">
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
                                            <label for="" class="col-sm-4">Test Performed Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="test_performed_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Quantity</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="quantity" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Packing</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="packing" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Port of Loading</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="loading" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Port of Discharge</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="discharge" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Vessle Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="vessle_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">PO Number</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="po_number" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">EORI Number</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="eori_number" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">REX No.</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="rex_no" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">HS Code</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="hs_code" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Test Type</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="test_type" class="form-control">
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
                                                <input type="text" name="results" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="apc_para" class="form-control"
                                                        value="Aerobic Plate Count(APC)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Method</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="apc_method" class="form-control"
                                                        value="AOAC-">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="apc_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Range</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="apc_before" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Standard</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="apc_after" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coliform_para" class="form-control"
                                                        value="Coliform">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Method</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coliform_method" class="form-control"
                                                        value="AOAC-">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coliform_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Range</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coliform_before" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Standard</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coliform_after" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coli_para" class="form-control"
                                                        value="Escherichia coli (E.coli)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Method</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coli_method" class="form-control"
                                                        value="AOAC-">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coli_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Range</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coli_before" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Standard</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="coli_after" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="staphy_para" class="form-control"
                                                        value="Staphylococcus.aureus">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Method</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="staphy_method" class="form-control"
                                                        value="AOAC-">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="staphy_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Range</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="staphy_before" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Standard</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="staphy_after" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="salmo_para" class="form-control"
                                                        value="Salmonella">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Method</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="salmo_method" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="salmo_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Range</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="salmo_before" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Standard</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="salmo_after" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="yeast_mould_para" class="form-control"
                                                        value="Yeast and Mould">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Method</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="yeast_mould_method" class="form-control"
                                                        value="AOAC-">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="yeast_mould_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Range</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="yeast_mould_before" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Reference Standard</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="yeast_mould_after" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Method</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="method" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Sign</label>

                                            <div class="col-sm-8">
                                                <input type="file" name="sign" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="checked_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="date" class="form-control">
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
    </div>
@endsection
