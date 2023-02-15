@extends('backend.main')

@section('finance-active', 'active')

@section('f04che28-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('f04che28-finance.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>FIDSL-04-Che/28 Finance</b></h4>
                    </div>

                    <form action="{{ route('f04che28-finance.update', $f04che28_finance->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Amount</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="amount" class="form-control"
                                                value="{{ $f04che28_finance->amount }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="date" class="form-control"
                                                value="{{ $f04che28_finance->date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-11 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Remark</label>

                                        <div class="col-sm-8">
                                            <textarea name="remark" id="" cols="30" rows="1" class="form-control">{{ $f04che28_finance->remark }}</textarea>
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
