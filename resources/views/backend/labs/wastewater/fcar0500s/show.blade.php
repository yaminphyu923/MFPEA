@extends('backend.main')

@section('lab-active', 'active')

@section('fcar0500-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>F-CAR-05-00</b></h4>
                        <a href="{{ route('fcar0500.create') }}">
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
                                <th>Sample Name</th>
                                <th>Analysis Date</th>
                                <th>Received Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fches as $fche)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $fche->job_number }}</td>
                                    <td>{{ $fche->sample_name }}</td>
                                    <td>{{ date('d-M-Y', strtotime($fche->analysis_date)) }}</td>
                                    <td>{{ date('d-M-Y', strtotime($fche->received_date)) }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('fcar0500.show', $fche->id) }}"><button type="button"
                                                class="btn btn-sm btn-primary py-2"><i class="fas fa-eye"></i>
                                                Detail</button></a>
                                        <a href="{{ route('fcar0500.print', $fche->id) }}"><button type="button"
                                                class="btn btn-sm btn-success py-2"><i class="fas fa-print"></i>
                                                Print</button></a>
                                        <a href="{{ route('fcar0500.edit', $fche->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning py-2"><i class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form action="{{ route('fcar0500.destroy', $fche->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger py-2 delete"
                                                id="{{ $fche->id }}"><i class="fas fa-trash"></i> Delete</button>
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
        //                 url: '/fche040001/' + id,
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
