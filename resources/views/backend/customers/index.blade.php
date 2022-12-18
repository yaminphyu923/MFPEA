@extends('backend.main')

@section('customer-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Customer List</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('customers-export') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                        class="fas fa-file-export"></i>
                                    <b>Excel Export</b></button>
                            </a>
                            <button type="button" class="btn btn-md btn-primary btn-theme" data-toggle="modal"
                                data-target="#excel_import"><i class="fas fa-file-import"></i>
                                <b>Excel Import</b></button>
                            <button type="button" class="btn btn-md btn-primary btn-theme" data-toggle="modal"
                                data-target="#customer"><i class="fas fa-plus-circle"></i>
                                <b>Add</b></button>

                            <form action="{{ route('customers-import') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="modal fade" id="excel_import" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Excel Import</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row offset-sm-1">
                                                    <label for="customer_excel">Customer Excel:</label>
                                                    <div class="col-sm-11">
                                                        <input type="file" name="customer_excel" id="customer_excel"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="modal fade text-dark" id="customer" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('customers.store') }}" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row mx-2">
                                                    <label for="member_type_name" class="col-sm-3">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name" id="name"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label for="member_type_name" class="col-sm-3">Phone</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="phone" id="phone"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label for="member_type_name" class="col-sm-3">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="address" id="address"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-2">
                                                    <label for="member_type_name" class="col-sm-3">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" name="email" id="email"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label for="company_name" class="col-sm-5">Company Name</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="company_name" id="company_name"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row mx-2">
                                                    <label for="product_name" class="col-sm-5">Product Name</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="product_name" id="product_name"
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
                        <thead class="thead-color">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Company Name</th>
                                <th>Product Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->company_name }}</td>
                                    <td>{{ $customer->product_name }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('customers.edit', $customer->id) }}"><button type="button"
                                                class="btn btn-md btn-warning"><i class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger btn-md" type="submit"
                                                id="{{ $customer->id }}"><i class="fas fa-trash-alt"></i> Delete</button>
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

            Swal.fire({
                title: 'Are you sure, you want to delete?',
                showCancelButton: true,
                confirmButtonText: `Confirm`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/customers/' + id,
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
