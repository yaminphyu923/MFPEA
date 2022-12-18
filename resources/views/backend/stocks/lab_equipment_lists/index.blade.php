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
                        <h4 class="mt-2"><b>Micro Lab Equipment List</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('ml_equipment_list_export') }}">
                                <button type="button" class="btn btn-md btn-primary mb-1"><i class="fas fa-file-export"></i>
                                    <b>Excel Export</b></button>
                            </a>
                            <button type="button" class="btn btn-md btn-primary" data-toggle="modal"
                                data-target="#ml-equipment-list"><i class="fas fa-plus-circle"></i>
                                <b>Create</b></button>
                            {{-- <a href="{{ route('member.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a> --}}

                            <div class="modal fade" id="ml-equipment-list" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ route('ml_equipment_list.store') }}" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Micro Lab Equipment List
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Equipment Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="equipment_name" id="equipment_name"
                                                            class="form-control">
                                                    </div>

                                                    <label class="col-sm-2">Brand</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="brand" id="brand"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Model</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="model" id="model"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Serial No</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="serial_no" id="serial_no"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">ID No</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="id_no" id="id_no"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Supplier</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="supplier" id="supplier"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Date of Purchase/Donate</label>
                                                    <div class="col-sm-4">
                                                        <input type="date" name="purchase_donate_date"
                                                            id="purchase_donate_date" class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Date of Installation Finished and First</label>
                                                    <div class="col-sm-4">
                                                        <input type="date" name="installation_date"
                                                            id="installation_date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Location</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="location" id="location"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Total Stock</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="total_stock" id="total_stock"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Remark</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="remark" id="remark"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Equipment Name</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Serial No</th>
                                <th>ID No</th>
                                {{-- <th>Supplier</th>
                                <th>Date of Purchase/Donate</th>
                                <th>Date of Installation Finished and First</th>
                                <th>Location</th> --}}
                                <th>Total Stock</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ml_equipment_lists as $ml_equipment_list)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $ml_equipment_list->equipment_name }}</td>
                                    <td>{{ $ml_equipment_list->brand }}</td>
                                    <td>{{ $ml_equipment_list->model }}</td>
                                    <td>{{ $ml_equipment_list->serial_no }}</td>
                                    <td>{{ $ml_equipment_list->id_no }}</td>
                                    {{-- <td>{{ $ml_equipment_list->supplier }}</td>
                                    <td>{{ $ml_equipment_list->purchase_donate_date }}</td>
                                    <td>{{ $ml_equipment_list->installation_date }}</td>
                                    <td>{{ $ml_equipment_list->location }}</td> --}}
                                    <td>{{ $ml_equipment_list->total_stock }}</td>
                                    <td>{{ $ml_equipment_list->remark }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ url('ml_equipment_list/purchase', $ml_equipment_list->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                <b>Purchase</b></button>
                                        </a>
                                        <a href="{{ url('ml_equipment_list/used', $ml_equipment_list->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-minus-circle"></i>
                                                <b>Used</b></button>
                                        </a>
                                        <a href="{{ route('ml_equipment_list.show', $ml_equipment_list->id) }}"><button
                                                type="button" class="btn btn-md btn-info py-2 px-1"><i
                                                    class="fas fa-eye m-0"></i>
                                                <b>Detail</b></button></a>
                                        <a href="{{ route('ml_equipment_list.edit', $ml_equipment_list->id) }}"><button
                                                type="button" class="btn btn-md btn-warning py-2"><i
                                                    class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <form action="{{ route('ml_equipment_list.destroy', $ml_equipment_list->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-md btn-danger py-2 delete"
                                                id="{{ $ml_equipment_list->id }}"><i class="fas fa-trash"></i>
                                                Delete</button>
                                        </form>
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
        // $(document).on('click', '.delete', function(e) {
        //     e.preventDefault();
        //     var id = this.id;

        //     //console.log(id);

        //     Swal.fire({
        //         title: 'Are you sure, you want to delete?',
        //         showCancelButton: true,
        //         confirmButtonText: `Confirm`,
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.ajax({
        //                 type: 'DELETE',
        //                 url: '/ml_equipment_list/' + id,
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
