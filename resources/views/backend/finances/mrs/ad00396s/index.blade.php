@extends('backend.main')

@section('finance-active', 'active')

@section('ad00396-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Ad-06-03-00396 / 22 Finance</b></h4>

                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Company Name</th>
                                <th>Lab Received Date</th>
                                <th>Product Name</th>
                                <th>Phone</th>
                                {{-- <th>Customer Name</th> --}}
                                <th>Voucher</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ad00396_finances as $ad)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $ad->ad00396 != null ? $ad->ad00396->company_name : '-' }}
                                    </td>
                                    <td>{{ $ad->ad00396 != null ? date('d-M-Y', strtotime($ad->ad00396->lab_received_date)) : '-' }}
                                    </td>
                                    <td>{{ $ad->ad00396 != null ? $ad->ad00396->product_name : '-' }}</td>
                                    <td>{{ $ad->ad00396 != null ? $ad->ad00396->phone : '-' }}</td>
                                    {{-- <td>{{ $ad->ad00396->customer != null ? $ad->ad00396->customer->name : '-' }}
                                    </td> --}}
                                    <td>{{ $ad->voucher }}</td>
                                    <td>{{ $ad->amount }}</td>
                                    <td>{{ date('d-M-Y', strtotime($ad->date)) }}</td>
                                    <td>
                                        <a href="{{ route('ad00396_finances.edit', $ad->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning py-2"><i class="fas fa-plus-circle"></i>
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
                        url: '/car0541-finance/' + id,
                        success: function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted Successfully!',
                                showConfirmButton: false,
                                timer: 1540
                            })
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
@endsection
