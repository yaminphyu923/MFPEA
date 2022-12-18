@extends('backend.main')

@section('lab-active', 'active')

@section('m020101-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>F-M02-01-01</b></h4>
                        <a href="{{ route('m020101.create') }}">
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
                                <th>Job Number</th>
                                <th>Analysis Date</th>
                                <th>Sample Description</th>
                                <th>Received Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ms as $m)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $m->job_number }}</td>
                                    <td>{{ date('d-M-Y', strtotime($m->analysis_date)) }}</td>
                                    <td>{{ $m->description }}</td>
                                    <td>{{ date('d-M-Y', strtotime($m->received_date)) }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('m020101.show', $m->id) }}"><button type="button"
                                                class="btn btn-sm btn-primary py-2"><i class="fas fa-eye"></i>
                                                Detail</button></a>
                                        <a href="{{ route('m020101.print', $m->id) }}"><button type="button"
                                                class="btn btn-sm btn-success py-2"><i class="fas fa-print"></i>
                                                Print</button></a>
                                        <a href="{{ route('m020101.edit', $m->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning py-2"><i class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form action="{{ route('m020101.destroy', $m->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger py-2 delete"
                                                id="{{ $m->id }}"><i class="fas fa-trash"></i> Delete</button>
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
        //                 url: '/m020101/' + id,
        //                 success: function() {
        //                     Swal.fire({
        //                         icon: 'success',
        //                         title: 'Deleted Successfully!',
        //                         showConfirmButton: false,
        //                         timer: 1440
        //                     })
        //                     location.reload();
        //                 }
        //             });
        //         }
        //     })
        // });
    </script>
@endsection
