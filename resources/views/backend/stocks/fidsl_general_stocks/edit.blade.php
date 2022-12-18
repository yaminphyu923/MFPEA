@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('fidsl-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Edid FIDSL General Stock</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('fidsl_general_stock.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card bg-primary text-light">
                        <div class="card-header">
                            <h4 class="text-center py-2"><b>Edit Stock</b></h4>
                        </div>

                        <form action="{{ route('fidsl_general_stock.update', $fidsl_general_stock->id) }}" method="POST"
                            autocomplete="off">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-12 my-0">
                                        <div class="form-group row mx-2">
                                            <label class="col-sm-4">Product Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="product_name" id="product_name"
                                                    class="form-control" value="{{ $fidsl_general_stock->product_name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-2">
                                            <label for="" class="col-sm-4 ">Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="date" class="form-control"
                                                    value="{{ $fidsl_general_stock->date }}">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-2">
                                            <label class="col-sm-4">Total Stock</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="total_stock" id="total_stock"
                                                    class="form-control" value="{{ $fidsl_general_stock->total_stock }}">
                                            </div>
                                        </div>
                                        <div class="form-group row mx-2">
                                            <label class="col-sm-4">Remark</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="remark" id="remark" class="form-control"
                                                    value="{{ $fidsl_general_stock->remark }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-11 my-0 text-center">
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
    </div>

@endsection
