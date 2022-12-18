@extends('backend.main')

@section('lab-active', 'active')

@section('ad-0201-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL-Ad-02-01</b></h4>
                        <a href="{{ route('aw-ad0201.create') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="btn-theme text-white">
                            <tr>
                                <th>No.</th>
                                <th>Job Number</th>
                                <th>Sample Name/Code</th>
                                <th>Sample Type</th>
                                <th>Sample Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ads as $ad)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $ad->job_number }}</td>
                                    <td>{{ $ad->sample_name_code }}</td>
                                    <td>{{ $ad->sample_type }}</td>
                                    <td>{{ $ad->sample_amount }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('aw-ad0201.show', $ad->id) }}"><button type="button"
                                                class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>
                                                Detail</button></a>
                                        <a href="{{ route('aw-ad0201.print', $ad->id) }}"><button type="button"
                                                class="btn btn-sm btn-success"><i class="fas fa-print"></i>
                                                Report</button></a>
                                        <a href="{{ route('aw-ad0201.edit', $ad->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form action="{{ route('aw-ad0201.destroy', $ad->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger delete"
                                                id="{{ $ad->id }}"><i class="fas fa-trash"></i> Delete</button>
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
        //                 url: '/aw-ad0201/' + id,
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
