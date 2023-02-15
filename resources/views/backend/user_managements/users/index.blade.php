@extends('backend.main')

@section('user_management-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Users</b></h4>
                        <div class="justify-content-end">
                            @if ($count < $limit_user)
                                <a href="{{ route('users.create') }}">
                                    <button type="button" class="btn btn-md btn-primary"><i class="fas fa-plus-circle"></i>
                                        <b>Create User</b></button>
                                </a>
                            @endif
                        </div>


                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                        {{-- <label class="badge badge-success">{{ $user->roles }}</label> --}}
                                    </td>
                                    <td class="d-flex justify-content-start">

                                        <a href="{{ route('users.show', $user->id) }}"><button type="button"
                                                class="btn btn-sm btn-primary py-2"><i class="fas fa-eye"></i>
                                                Detail</button></a>
                                        {{-- <p>{{ auth()->user()->getRoleNames()[0] }}</p> --}}
                                        @if (auth()->user()->getRoleNames()[0] == 'Superadmin')
                                            <a href="{{ route('increase_count', $user->id) }}"><button type="button"
                                                    class="btn btn-sm btn-info py-2"><i class="fas fa-sort-numeric-up"></i>
                                                    Increase Count</button></a>
                                        @endif


                                        <a href="{{ route('users.edit', $user->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning py-2"><i class="fas fa-edit"></i>
                                                Edit</button></a>

                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger py-2 delete"
                                                id="{{ $user->id }}"><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                        {{-- @if (auth()->user()->getRoleNames()[0] == 'Admin') --}}
                                        <a href="{{ route('change_password_page', $user->id) }}"><button type="button"
                                                class="btn btn-sm btn-info py-2"><i class="fas fa-key"></i>
                                                Change Password</button></a>
                                        {{-- @endif --}}

                                        @if ($user->id == auth()->user()->id)
                                            <a href="{{ route('password.request') }}"><button type="button"
                                                    class="btn btn-sm btn-secondary py-2"><i class="fas fa-unlock-alt"></i>
                                                    Reset Password</button></a>
                                        @endif
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
        //                 url: '/users/' + id,
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
