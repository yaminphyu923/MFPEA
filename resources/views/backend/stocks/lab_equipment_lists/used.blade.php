@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('ml-equipment-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Used Micro Lab Equipment List</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('ml_equipment_list.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Used</b></h4>
                    </div>

                    <form action="{{ route('used_ml_equipment_list.store') }}" method="POST" autocomplete="off">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 my-0">
                                    <input type="hidden" name="ml_equipment_list_id" value="{{ $ml_equipment_list->id }}">
                                </div>
                                <div class="col-sm-12 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Use Stock</label>

                                        <div class="col-sm-7">
                                            <input type="number" name="used_stock" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right">Date</label>

                                        <div class="col-sm-7">
                                            <input type="date" name="used_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-11 my-0 text-center">
                                    <button type="submit" class="btn btn-md w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Submit</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Product Name</th>
                                <th>Date</th>
                                <th>Used Stock</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pu_ml_equipment_lists as $pu_ml_equipment_list)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $pu_ml_equipment_list->stockMLEquipmentList != null ? $pu_ml_equipment_list->stockMLEquipmentList->equipment_name : '' }}
                                    </td>
                                    <td>{{ date('d-M-Y', strtotime($pu_ml_equipment_list->used_date)) }}</td>
                                    <td>{{ $pu_ml_equipment_list->used_stock }}</td>
                                    {{-- <td>

                                        <button type="button" class="btn btn-sm btn-danger py-2 delete"
                                            id="{{ $pu_ml_equipment_list->id }}"><i
                                                class="fas fa-trash"></i>Delete</button>
                                    </td> --}}
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

            Swal.fire({
                title: 'Are you sure, you want to delete?',
                showCancelButton: true,
                confirmButtonText: `Confirm`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/used_ml_equipment_list/' + id,
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
