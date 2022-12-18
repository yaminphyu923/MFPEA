@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('chemical-list-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('chemical_list.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Chemical Lab Chemical List(Edit)</b></h4>
                    </div>

                    <form action="{{ route('chemical_list.update', $chemical_list->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Chemical Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="chemical_name" class="form-control"
                                                value="{{ $chemical_list->chemical_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Description</label>

                                        <div class="col-sm-8">
                                            <textarea name="description" id="description" cols="30" rows="1" class="form-control">{{ $chemical_list->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Brand</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="brand" class="form-control"
                                                value="{{ $chemical_list->brand }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Country</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="country" class="form-control"
                                                value="{{ $chemical_list->country }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Serial No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="serial_no" class="form-control"
                                                value="{{ $chemical_list->serial_no }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Package</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="package" class="form-control"
                                                value="{{ $chemical_list->package }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Quantity</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="qty" class="form-control"
                                                value="{{ $chemical_list->qty }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Quantity(g/kg/L)</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="qty_gkgl" class="form-control"
                                                value="{{ $chemical_list->qty_gkgl }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="unit" class="form-control"
                                                value="{{ $chemical_list->unit }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Formula</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="formula" class="form-control"
                                                value="{{ $chemical_list->formula }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Total Stock</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="total_stock" class="form-control"
                                                value="{{ $chemical_list->total_stock }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control"
                                                value="{{ $chemical_list->remark }}">
                                        </div>
                                    </div>
                                </div>

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
