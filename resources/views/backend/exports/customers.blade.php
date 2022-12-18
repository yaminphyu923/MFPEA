{{-- @extends('layouts.app')

@section('content') --}}
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Company Name</th>
                            <th>Product Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->company_name }}</td>
                                <td>{{ $customer->product_name }}</td>
                                <td>{{ $customer->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>
    </div>
</div>
{{-- @endsection --}}
