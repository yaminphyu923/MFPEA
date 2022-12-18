@extends('backend.main')

@section('finance-active', 'active')

@section('fche040060-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Che-04-00/60 Finance</b></h4>

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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fche040060_finances as $fche040060_finance)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $fche040060_finance->fche040060 != null ? $fche040060_finance->fche040060->job_number : '-' }}
                                    </td>
                                    <td>{{ $fche040060_finance->fche040060 != null ? $fche040060_finance->fche040060->product_name : '-' }}
                                    </td>
                                    <td>{{ $fche040060_finance->fche040060 != null ? date('d-M-Y', strtotime($fche040060_finance->fche040060->received_date)) : '-' }}
                                    </td>
                                    <td>

                                        <a href="{{ route('fche040060-finance.show', $fche040060_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-eye"></i>
                                                Detail</button></a>

                                        <a href="{{ route('fche040060-finance.edit', $fche040060_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                Add</button></a>

                                        <a href="{{ route('fche040060-finance.secondAdd', $fche040060_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                Second Add</button></a>

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
