@extends('backend.main')

@section('finance-active', 'active')

@section('fche040053-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Che-04-00/53 Finance</b></h4>

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
                            @foreach ($fche040053_finances as $fche040053_finance)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $fche040053_finance->fche040053 != null ? $fche040053_finance->fche040053->job_number : '-' }}
                                    </td>
                                    <td>{{ $fche040053_finance->fche040053 != null ? $fche040053_finance->fche040053->product_name : '-' }}
                                    </td>
                                    <td>{{ $fche040053_finance->fche040053 != null ? date('d-M-Y', strtotime($fche040053_finance->fche040053->received_date)) : '-' }}
                                    </td>
                                    <td>

                                        <a href="{{ route('fche040053-finance.show', $fche040053_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-eye"></i>
                                                Detail</button></a>

                                        <a href="{{ route('fche040053-finance.edit', $fche040053_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                Add</button></a>

                                        <a href="{{ route('fche040053-finance.secondAdd', $fche040053_finance->id) }}"><button
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
