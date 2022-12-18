@extends('backend.main')

@section('finance-active', 'active')

@section('ad-0201-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Ad-02-01 Finance</b></h4>

                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="btn-theme text-white">
                            <tr>
                                <th>No.</th>
                                <th>Job Number</th>
                                <th>Sample Name/Code</th>
                                <th>Type</th>
                                <th>Sample Amount</th>
                                <th>Lab Received Date</th>
                                <th>Remark</th>
                                <th>Receive Voucher</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ad_finances as $ad_finance)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $ad_finance->ad0201 != null ? $ad_finance->ad0201->job_number : '-' }}</td>
                                    <td>{{ $ad_finance->ad0201 != null ? $ad_finance->ad0201->sample_name_code : '-' }}
                                    </td>
                                    <td>{{ $ad_finance->ad0201 != null ? $ad_finance->ad0201->sample_type : '-' }}</td>
                                    <td>{{ $ad_finance->ad0201 != null ? $ad_finance->ad0201->sample_amount : '-' }}</td>
                                    <td>{{ $ad_finance->ad0201 != null ? date('d-M-Y', strtotime($ad_finance->ad0201->lab_date_received)) : '-' }}
                                    </td>
                                    <td>{{ $ad_finance->remark }}</td>
                                    <td>{{ $ad_finance->receive_voucher }}</td>
                                    <td>{{ $ad_finance->amount }}</td>
                                    <td>{{ date('d-M-Y', strtotime($ad_finance->date)) }}</td>
                                    <td>
                                        <a href="{{ route('editAd0201', $ad_finance->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning btn-theme py-2"><i
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
    <script>
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var id = this.id;

            //console.log(id);

            Swal.fire({
                title: 'Are you sure, you want to delete?',
                showCancelButton: true,
                confirmButtonText: `Confirm`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/ad-finance/' + id,
                        success: function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted Successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
@endsection
