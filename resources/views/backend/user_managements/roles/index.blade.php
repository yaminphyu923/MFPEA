@extends('backend.main')

@section('user_management-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Role</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('roles.create') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-plus-circle"></i>
                                    <b>Create Role</b></button>
                            </a>
                        </div>


                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Role Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $role->name }}</td>

                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('roles.show', $role->id) }}"><button type="button"
                                                class="btn btn-sm btn-primary py-2"><i class="fas fa-eye"></i>
                                                Detail</button></a>

                                        <a href="{{ route('roles.edit', $role->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning py-2"><i class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger py-2 delete"
                                                id="{{ $role->id }}"><i class="fas fa-trash"></i> Delete</button>
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
        //                 url: '/roles/' + id,
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
