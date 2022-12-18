@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('cl-equipment-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Chemical Lab Equipment List</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('cl_equipment_list_export') }}">
                                <button type="button" class="btn btn-md btn-primary mb-1"><i class="fas fa-file-export"></i>
                                    <b>Excel Export</b></button>
                            </a>
                            <button type="button" class="btn btn-md btn-primary" data-toggle="modal"
                                data-target="#cl-equipment-list"><i class="fas fa-plus-circle"></i>
                                <b>Create</b></button>
                            {{-- <a href="{{ route('member.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a> --}}

                            <div class="modal fade" id="cl-equipment-list" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ route('cl_equipment_list.store') }}" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Chemical Lab Equipment
                                                    List
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Product Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="product_name" id="product_name"
                                                            class="form-control">
                                                    </div>

                                                    <label class="col-sm-2">Model No</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="model_no" id="model_no"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Capacity</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="capacity" id="capacity"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Power Supply</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="power_supply" id="power_supply"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Manufacture's Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="manufacture_name" id="manufacture_name"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Country</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="country" id="country"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Supplier</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="supplier" id="supplier"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Identification</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="identification" id="identification"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Brand</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="brand" id="brand"
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
                                <th>Product Name</th>
                                <th>Model No</th>
                                <th>Capacity</th>
                                {{-- <th>Power Supply</th>
                                <th>Manufacture's name</th>
                                <th>Country</th>
                                <th>Supplier</th> --}}
                                <th>Identification</th>
                                <th>Brand</th>
                                <th>Total Stock</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cl_equipment_lists as $cl_equipment_list)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $cl_equipment_list->product_name }}</td>
                                    <td>{{ $cl_equipment_list->model_no }}</td>
                                    <td>{{ $cl_equipment_list->capacity }}</td>
                                    {{-- <td>{{ $cl_equipment_list->power_supply }}</td>
                                    <td>{{ $cl_equipment_list->manufacture_name }}</td>
                                    <td>{{ $cl_equipment_list->country }}</td>
                                    <td>{{ $cl_equipment_list->supplier }}</td> --}}
                                    <td>{{ $cl_equipment_list->identification }}</td>
                                    <td>{{ $cl_equipment_list->brand }}</td>
                                    <td>{{ $cl_equipment_list->total_stock }}</td>
                                    <td>{{ $cl_equipment_list->remark }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ url('cl_equipment_list/purchase', $cl_equipment_list->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                <b>Purchase</b></button>
                                        </a>
                                        <a href="{{ url('cl_equipment_list/used', $cl_equipment_list->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-minus-circle"></i>
                                                <b>Used</b></button>
                                        </a>
                                        <a href="{{ route('cl_equipment_list.show', $cl_equipment_list->id) }}"><button
                                                type="button" class="btn btn-md btn-info py-2 px-1"><i
                                                    class="fas fa-eye m-0"></i>
                                                <b>Detail</b></button></a>
                                        <a href="{{ route('cl_equipment_list.edit', $cl_equipment_list->id) }}"><button
                                                type="button" class="btn btn-md btn-warning py-2"><i
                                                    class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <form action="{{ route('cl_equipment_list.destroy', $cl_equipment_list->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-md btn-danger py-2 delete"
                                                id="{{ $cl_equipment_list->id }}"><i class="fas fa-trash"></i>
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
        //                 url: '/cl_equipment_list/' + id,
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
