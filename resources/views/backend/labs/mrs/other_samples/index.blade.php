@extends('backend.main')

@section('lab-active', 'active')

@section('other_sample-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Other Sample Test Report</b></h4>
                        {{-- <a href="{{ route('other_sample_tests.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><b>other_sample Test
                                    Parameter</b></button>
                        </a> --}}

                        <a href="{{ route('other_samples.create') }}">
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
                            @foreach ($other_samples as $other_sample)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $other_sample->title }}</td>
                                    <td>{{ $other_sample->company_name }}</td>
                                    <td>{{ date('d-M-Y', strtotime($other_sample->lab_received_date)) }}</td>
                                    <td>{{ $other_sample->product_name }}</td>
                                    <td>{{ $other_sample->phone }}</td>
                                    <td class="d-flex justify-content-start">
                                        <a href="{{ route('other_samples.show', $other_sample->id) }}"><button
                                                type="button" class="btn btn-sm btn-primary py-2"><i
                                                    class="fas fa-eye"></i>
                                                Detail</button></a>
                                        <a href="{{ route('other_samples.print', $other_sample->id) }}"><button
                                                type="button" class="btn btn-sm btn-success py-2"><i
                                                    class="fas fa-print"></i>
                                                Report</button></a>
                                        <a href="{{ route('other_samples.edit', $other_sample->id) }}"><button
                                                type="button" class="btn btn-sm btn-warning py-2"><i
                                                    class="fas fa-edit"></i>
                                                Edit</button></a>
                                        <form action="{{ route('other_samples.destroy', $other_sample->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger py-2 delete"
                                                id="{{ $other_sample->id }}"><i class="fas fa-trash"></i> Delete</button>
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
