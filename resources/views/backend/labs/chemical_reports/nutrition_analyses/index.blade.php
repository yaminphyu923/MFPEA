@extends('backend.main')

@section('lab-active', 'active')

@section('nutrition-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Nutrition Analysis</b></h4>
                        {{-- <a href="{{ route('nutrition_tests.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><b>Nutrition Analysis Test
                                    Parameter</b></button>
                        </a> --}}

                        <a href="{{ route('nutritions.create') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Company Name</th>
                                <th>Lab Received Date</th>
                                <th>Product Name</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nutritions as $nutrition)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $nutrition->title }}</td>
                                    <td>{{ $nutrition->company_name }}</td>
                                    <td>{{ date('d-M-Y', strtotime($nutrition->lab_received_date)) }}</td>
                                    <td>{{ $nutrition->product_name }}</td>
                                    <td>{{ $nutrition->phone }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('nutritions.show', $nutrition->id) }}"><button type="button"
                                                class="btn btn-sm btn-primary py-2"><i class="fas fa-eye"></i>
                                                Detail</button></a>
                                        <a href="{{ route('nutritions.print', $nutrition->id) }}"><button type="button"
                                                class="btn btn-sm btn-success py-2"><i class="fas fa-print"></i>
                                                Report</button></a>
                                        <a href="{{ route('nutritions.edit', $nutrition->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning py-2"><i class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form action="{{ route('nutritions.destroy', $nutrition->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger py-2 delete"
                                                id="{{ $nutrition->id }}"><i class="fas fa-trash"></i> Delete</button>
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
        //                 url: '/ad00879/' + id,
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
