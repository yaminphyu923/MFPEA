@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('ml-petrifilm-stock-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Micro Lab Petrifilm Stock List</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('ml_petrifilm_stock_export') }}">
                                <button type="button" class="btn btn-md btn-primary mb-1"><i class="fas fa-file-export"></i>
                                    <b>Excel Export</b></button>
                            </a>
                            <button type="button" class="btn btn-md btn-primary" data-toggle="modal"
                                data-target="#ml-general-stock"><i class="fas fa-plus-circle"></i>
                                <b>Create</b></button>
                            {{-- <a href="{{ route('member.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a> --}}

                            <div class="modal fade" id="ml-general-stock" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ route('ml_petrifilm_stock.store') }}" method="POST"
                                        autocomplete="off">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Micro Lab Petrifilm Stock
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Item Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="item_name" id="item_name"
                                                            class="form-control">
                                                    </div>

                                                    <label class="col-sm-2">Description</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="description" id="description"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Date</label>
                                                    <div class="col-sm-4">
                                                        <input type="date" name="date" id="date"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Stock</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="stock" id="stock"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">New</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="new" id="new"
                                                            class="form-control">
                                                    </div>
                                                    <label class="col-sm-2">Usage/Damage</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="usage" id="usage"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-2">Balance</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="balance" id="balance"
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
                                <th>Item Name</th>
                                <th>Description</th>
                                <th>Total Stock</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ml_petrifilm_stocks as $ml_petrifilm_stock)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $ml_petrifilm_stock->item_name }}</td>
                                    <td>{{ $ml_petrifilm_stock->description }}</td>
                                    <td>{{ $ml_petrifilm_stock->total_stock }}</td>
                                    <td>{{ $ml_petrifilm_stock->remark }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ url('ml_petrifilm_stock/purchase', $ml_petrifilm_stock->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2 px-1"><i
                                                    class="fas fa-plus-circle pr-0"></i><b>Purchase</b></button>
                                        </a>
                                        <a href="{{ url('ml_petrifilm_stock/used', $ml_petrifilm_stock->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2 px-1"><i
                                                    class="fas fa-minus-circle m-0"></i>
                                                <b>Used</b></button>
                                        </a>
                                        <a href="{{ route('ml_petrifilm_stock.show', $ml_petrifilm_stock->id) }}"><button
                                                type="button" class="btn btn-md btn-info py-2 px-1"><i
                                                    class="fas fa-eye m-0"></i>
                                                <b>Detail</b></button></a>
                                        <a href="{{ route('ml_petrifilm_stock.edit', $ml_petrifilm_stock->id) }}"><button
                                                type="button" class="btn btn-md btn-warning py-2 px-1"><i
                                                    class="fas fa-edit m-0"></i>
                                                Edit</button></a>

                                        <form action="{{ route('ml_petrifilm_stock.destroy', $ml_petrifilm_stock->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-md btn-danger py-2 delete"
                                                id="{{ $ml_petrifilm_stock->id }}"><i class="fas fa-trash"></i>
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
        //                 url: '/ml_petrifilm_stock/' + id,
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
