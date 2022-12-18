@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('glass-ware-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Chemical Lab(glass wares)</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('glassware_export') }}">
                                <button type="button" class="btn btn-md btn-primary mb-1"><i class="fas fa-file-export"></i>
                                    <b>Excel Export</b></button>
                            </a>
                            <button type="button" class="btn btn-md btn-primary" data-toggle="modal"
                                data-target="#glass-ware"><i class="fas fa-plus-circle"></i>
                                <b>Create</b></button>
                            {{-- <a href="{{ route('member.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a> --}}

                            <div class="modal fade" id="glass-ware" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('glass_wares.store') }}" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Chemical Lab(glass wares)
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-4">Items</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="items" id="items"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-4">Capacity</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="capacity" id="capacity"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-4">Total Stock</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" name="total_stock" id="total_stock"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-4">Remark</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="remark" id="remark"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-4">Unit</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="unit" id="unit"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label class="col-sm-4">Quantity</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="qty" id="qty"
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
                                <th>Items</th>
                                <th>Capacity</th>
                                <th>Total Stock(Balance)</th>
                                <th>Remark</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($glass_wares as $glass_ware)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $glass_ware->items }}</td>
                                    <td>{{ $glass_ware->capacity }}</td>
                                    <td>{{ $glass_ware->total_stock }}</td>
                                    <td>{{ $glass_ware->remark }}</td>
                                    <td>{{ $glass_ware->unit }}</td>
                                    <td>{{ $glass_ware->qty }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ url('glass_wares/purchase', $glass_ware->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-plus-circle"></i>
                                                <b>Purchase</b></button>
                                        </a>
                                        <a href="{{ url('glass_wares/used', $glass_ware->id) }}">
                                            <button type="button" class="btn btn-md btn-primary py-2"><i
                                                    class="fas fa-minus-circle"></i>
                                                <b>Used</b></button>
                                        </a>
                                        <a href="{{ route('glass_wares.show', $glass_ware->id) }}"><button type="button"
                                                class="btn btn-md btn-info py-2 px-1"><i class="fas fa-eye m-0"></i>
                                                <b>Detail</b></button>
                                        </a>
                                        <a href="{{ route('glass_wares.edit', $glass_ware->id) }}"><button type="button"
                                                class="btn btn-md btn-warning py-2"><i class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <form action="{{ route('glass_wares.destroy', $glass_ware->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-md btn-danger py-2 delete"
                                                id="{{ $glass_ware->id }}"><i class="fas fa-trash"></i>
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
        //                 url: '/glass_wares/' + id,
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
