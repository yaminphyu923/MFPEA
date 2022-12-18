@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('chemical-list-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Chemical Lab Chemical List</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('chemical_list_export') }}">
                                <button type="button" class="btn btn-md btn-primary mb-1"><i class="fas fa-file-export"></i>
                                    <b>Excel Export</b></button>
                            </a>
                            <button type="button" class="btn btn-md btn-primary" data-toggle="modal"
                                data-target="#general-stock"><i class="fas fa-plus-circle"></i>
                                <b>Create</b></button>
                            {{-- <a href="{{ route('member.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a> --}}

                            <div class="modal fade" id="general-stock" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ route('chemical_list.store') }}" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Chemical Lab Chemical
                                                    List</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Chemical Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="chemical_name" id="chemical_name"
                                                            class="form-control">
                                                    </div>

                                                    <label class="col-sm-2">Description</label>
                                                    <div class="col-sm-4">
                                                        <textarea name="description" id="description" cols="30" rows="1" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Brand</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="brand" id="brand"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Country of Origin</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="country" id="country"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Serial No</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="serial_no" id="serial_no"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Package</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="package" id="package"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Quantity</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="qty" id="qty"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Quantity(g/kg/L)</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="qty_gkgl" id="qty_gkgl"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Unit</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="unit" id="unit"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Formula</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="formula" id="formula"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Total Stock</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="total_stock" id="total_stock"
                                                            class="form-control">
                                                    </div>
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
                                <th>Chemical Name</th>
                                {{-- <th>Description</th> --}}
                                <th>Brand</th>
                                <th>Country</th>
                                <th>Serial No</th>
                                {{-- <th>Package</th>
                                <th>Quantity</th>
                                <th>Quantity(g/kg/L)</th>
                                <th>Unit</th>
                                <th>Formula</th> --}}
                                <th>Total Stock</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chemical_lists as $chemical_list)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $chemical_list->chemical_name }}</td>
                                    {{-- <td>{{ $chemical_list->description }}</td> --}}
                                    <td>{{ $chemical_list->brand }}</td>
                                    <td>{{ $chemical_list->country }}</td>
                                    <td>{{ $chemical_list->serial_no }}</td>
                                    {{-- <td>{{ $chemical_list->package }}</td>
                                    <td>{{ $chemical_list->qty }}</td>
                                    <td>{{ $chemical_list->qty_gkgl }}</td>
                                    <td>{{ $chemical_list->unit }}</td>
                                    <td>{{ $chemical_list->formula }}</td> --}}
                                    <td>{{ $chemical_list->total_stock }}</td>
                                    <td>{{ $chemical_list->remark }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ url('chemical_list/purchase', $chemical_list->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                <b>Purchase</b></button>
                                        </a>
                                        <a href="{{ url('chemical_list/used', $chemical_list->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-minus-circle"></i>
                                                <b>Used</b></button>
                                        </a>
                                        <a href="{{ route('chemical_list.show', $chemical_list->id) }}"><button
                                                type="button" class="btn btn-md btn-info py-2 px-1"><i
                                                    class="fas fa-eye m-0"></i>
                                                <b>Detail</b></button>
                                        </a>
                                        <a href="{{ route('chemical_list.edit', $chemical_list->id) }}"><button
                                                type="button" class="btn btn-md btn-warning py-2"><i
                                                    class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <form action="{{ route('chemical_list.destroy', $chemical_list->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-md btn-danger py-2 delete"
                                                id="{{ $chemical_list->id }}"><i class="fas fa-trash"></i>
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
    {{-- <script>
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
                        url: '/chemical_list/' + id,
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
    </script> --}}
@endsection
