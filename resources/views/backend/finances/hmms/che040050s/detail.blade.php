@extends('backend.main_no_sidebar')

@section('finance-active', 'active')

@section('che040050-finance-active', 'active')

@section('content')
    @include('backend.finances.finance_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Che-04-01/50 Finance (Detail)</b></h4>
                        <a href="{{ route('che040050-finance.index') }}">
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
                                <td>{{ $che040050_finance->date != null ? date('d-M-Y', strtotime($che040050_finance->date)) : '' }}
                                </td>
                                <td>{{ $che040050_finance->voucher }}</td>
                                <td>{{ $che040050_finance->remark }}</td>

                                <td>{{ $che040050_finance->amount }}</td>

                                <td>{{ $che040050_finance->test_type }}</td>
                            </tr>

                            <tr>
                                <td>{{ $che040050_finance->date_2 != null ? date('d-M-Y', strtotime($che040050_finance->date_2)) : '' }}
                                </td>
                                <td>{{ $che040050_finance->voucher_2 }}</td>
                                <td>{{ $che040050_finance->remark_2 }}</td>

                                <td>{{ $che040050_finance->amount_2 }}</td>

                                <td>{{ $che040050_finance->test_type_2 }}</td>
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
                        url: '/che040050-finance/' + id,
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
