@extends('backend.main')

@section('finance-active', 'active')

@section('fche040123-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Che-04-01/23 Finance</b></h4>

                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Job Number</th>
                                <th>Sample Name</th>
                                <th>Received Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fche040123_finances as $fche040123_finance)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $fche040123_finance->fche040123 != null ? $fche040123_finance->fche040123->job_number : '-' }}
                                    </td>
                                    <td>{{ $fche040123_finance->fche040123 != null ? $fche040123_finance->fche040123->sample_name : '-' }}
                                    </td>
                                    <td>{{ $fche040123_finance->fche040123 != null ? date('d-M-Y', strtotime($fche040123_finance->fche040123->received_date)) : '-' }}
                                    </td>
                                    <td>

                                        <a href="{{ route('fche040123-finance.show', $fche040123_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-eye"></i>
                                                Detail</button></a>

                                        <a href="{{ route('fche040123-finance.edit', $fche040123_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                Add</button></a>

                                        <a href="{{ route('fche040123-finance.secondAdd', $fche040123_finance->id) }}"><button
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
