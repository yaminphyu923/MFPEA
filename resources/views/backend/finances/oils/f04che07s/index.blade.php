@extends('backend.main')

@section('finance-active', 'active')

@section('f04che07-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-04-Che/07 Finance</b></h4>

                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Job Number</th>
                                <th>Product Name</th>
                                <th>Received Date</th>
                                <th>Voucher</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($f04che07_finances as $f04che07_finance)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $f04che07_finance->f04che07 != null ? $f04che07_finance->f04che07->job_number : '-' }}
                                    </td>
                                    <td>{{ $f04che07_finance->f04che07 != null ? $f04che07_finance->f04che07->product_name : '-' }}
                                    </td>
                                    <td>{{ $f04che07_finance->f04che07 != null ? date('d-M-Y', strtotime($f04che07_finance->f04che07->received_date)) : '-' }}
                                    </td>
                                    <td>{{ $f04che07_finance->voucher }}</td>
                                    <td>{{ $f04che07_finance->amount }}</td>
                                    <td>{{ date('d-M-Y', strtotime($f04che07_finance->date)) }}</td>
                                    <td>
                                        <a href="{{ route('f04che07-finance.edit', $f04che07_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                Add</button></a>

                                        {{-- <button type="button" class="btn btn-sm btn-danger py-2 delete"
                                            id="{{ $ad_finance->id }}"><i class="fas fa-trash"></i>Delete</button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
