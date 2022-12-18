@extends('backend.main_no_sidebar')

@section('finance-active', 'active')

@section('fche040122-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Che-04-01/22 Finance (Detail)</b></h4>
                        <a href="{{ route('fche040122-finance.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="btn-theme text-white">
                            <tr>
                                <th>Date</th>
                                <th>Receive Voucher</th>
                                <th>Remark</th>

                                <th>Amount</th>

                                <th>Type of Test</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $fche040122_finance->date != null ? date('d-M-Y', strtotime($fche040122_finance->date)) : '' }}
                                </td>
                                <td>{{ $fche040122_finance->voucher }}</td>
                                <td>{{ $fche040122_finance->remark }}</td>

                                <td>{{ $fche040122_finance->amount }}</td>

                                <td>{{ $fche040122_finance->test_type }}</td>
                            </tr>

                            <tr>
                                <td>{{ $fche040122_finance->date_2 != null ? date('d-M-Y', strtotime($fche040122_finance->date_2)) : '' }}
                                </td>
                                <td>{{ $fche040122_finance->voucher_2 }}</td>
                                <td>{{ $fche040122_finance->remark_2 }}</td>

                                <td>{{ $fche040122_finance->amount_2 }}</td>

                                <td>{{ $fche040122_finance->test_type_2 }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // $(document).on('click', '.delete', function(e) {
        //     e.preventDefault();
        //     var id = this.id;

        //     Swal.fire({
        //         title: 'Are you sure, you want to delete?',
        //         showCancelButton: true,
        //         confirmButtonText: `Confirm`,
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.ajax({
        //                 type: 'DELETE',
        //                 url: '/fche040122-finance/' + id,
        //                 success: function() {
        //                     Swal.fire({
        //                         icon: 'success',
        //                         title: 'Deleted Successfully!',
        //                         showConfirmButton: false,
        //                         timer: 1500
        //                     })
        //                     location.reload();
        //                 }
        //             });
        //         }
        //     })
        // });
    </script>
@endsection
