@extends('backend.main')

@section('finance-active', 'active')

@section('fcar0502-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>F-CAR-05-02 Finance</b></h4>

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
                            @foreach ($fcar0502_finances as $fcar0502_finance)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $fcar0502_finance->fcar0502 != null ? $fcar0502_finance->fcar0502->job_number : '-' }}
                                    </td>
                                    <td>{{ $fcar0502_finance->fcar0502 != null ? $fcar0502_finance->fcar0502->sample_name : '-' }}
                                    </td>
                                    <td>{{ $fcar0502_finance->fcar0502 != null ? date('d-M-Y', strtotime($fcar0502_finance->fcar0502->received_date)) : '-' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('fcar0502-finance.show', $fcar0502_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-eye"></i>
                                                Detail</button></a>
                                        <a href="{{ route('fcar0502-finance.edit', $fcar0502_finance->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                Add</button></a>

                                        <a href="{{ route('fcar0502-finance.secondAdd', $fcar0502_finance->id) }}"><button
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
