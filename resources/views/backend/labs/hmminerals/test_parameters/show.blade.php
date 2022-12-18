@extends('backend.main')

@section('lab-active', 'active')

{{-- @section('car0501-active', 'active') --}}

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Human Metals and Minerals (Test Parameter)</b></h4>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('car0500.create') }}">
                                <button type="button" class="btn btn-md btn-primary mr-1"><i
                                        class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>
                            <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#test"><i
                                    class="fas fa-plus-circle"></i>
                                <b>Create</b></button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{ route('hmm-test.store') }}" method="POST">
                                @csrf

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Test Parameter</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 my-0">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-4">Test Parameter</label>

                                                    <div class="col-sm-8">
                                                        <input type="text" name="test_parameter" class="form-control"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Test Parameter</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tests as $test)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $test->test_parameter }}</td>
                                    <td>
                                        <a href="{{ route('hmm-test.edit', $test->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning py-2"><i class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <button type="button" class="btn btn-sm btn-danger py-2 delete"
                                            id="{{ $test->id }}"><i class="fas fa-trash"></i>Delete</button>
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
                        url: '/hmm-test/' + id,
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
