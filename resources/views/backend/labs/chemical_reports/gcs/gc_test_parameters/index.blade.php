@extends('backend.main')

@section('gc-active', 'active')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>GC Test Parameter</small></b></h4>
                    <div class="justify-content-end">
                        <button type="button" class="btn btn-md btn-primary btn-theme" data-toggle="modal"
                            data-target="#member"><i class="fas fa-plus-circle"></i>
                            <b>Add</b></button>

                        <a href="{{ route('gcs.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

                        <div class="modal fade" id="member" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('gc_test_parameters.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Test Parameter</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row mx-2">
                                                <label for="name" class="col-sm-2">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" id="name"
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
                    <thead class="btn-theme text-white">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gc_tests as $test)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $test->name }}</td>
                                <td>
                                    <form action="{{ route('gc_test_parameters.update', $test->id) }}" method="POST"
                                        autocomplete="off">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input type="text" name="name" id="name"
                                                    value="{{ $test->name }}" class="form-control">
                                            </div>

                                            <div class="col-sm-3 mt-1">
                                                <button type="submit" class="btn btn-md btn-warning py-2"><i
                                                        class="fas fa-edit"></i> Update</button>
                                            </div>
                                        </div>

                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('gc_test_parameters.destroy', $test->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger btn-theme btn-md py-2" type="submit"
                                            id="{{ $test->id }}">
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
