@extends('backend.main')

@section('finance-active', 'active')

@section('aa_fcar0501-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('aa_fcar0501_finance.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>F-CAR-05-01 Finance</b></h4>
                    </div>

                    <form action="{{ route('aa_fcar0501_finance.update', $aa_fcar0501_finance->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Voucher</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="voucher_2" class="form-control"
                                                value="{{ $aa_fcar0501_finance->voucher_2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Amount</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="amount_2" class="form-control"
                                                value="{{ $aa_fcar0501_finance->amount_2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="date_2" class="form-control"
                                                value="{{ $aa_fcar0501_finance->date_2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Remark</label>

                                        <div class="col-sm-8">
                                            <textarea name="remark_2" id="" cols="30" rows="1" class="form-control">{{ $aa_fcar0501_finance->remark_2 }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Type of Test</label>

                                        <div class="col-sm-8">
                                            <textarea name="test_type_2" id="" cols="30" rows="1" class="form-control">{{ $aa_fcar0501_finance->test_type_2 }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 my-0 text-center">
                                    <button type="submit" class="btn btn-md w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Add</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
