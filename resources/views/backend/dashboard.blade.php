@extends('backend.main')

@section('dashboard-active', 'active')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="row">

                <div class="col-md-3 mb-4 stretch-card transparent">
                    <div class="card dashboard">
                        <a href="{{ route('customers.index') }}">
                            <div class="card-body">
                                <p class="mb-4">Customers</p>
                                <p class="fs-30 mb-2 badge bg-info">{{ $customer_count }}</p>
                                <p></p>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                    <div class="card dashboard">
                        <a href="{{ route('members.index') }}">
                            <div class="card-body">
                                <p class="mb-4">Members</p>
                                <p class="fs-30 mb-2 badge bg-info">{{ $member_count }}</p>
                                <p></p>
                            </div>
                        </a>
                    </div>

                </div>
                {{-- <div class="col-md-3 mb-4 stretch-card transparent">
                    <div class="card bg-color">
                        <div class="card-body">
                            <p class="mb-4">Total Bookings</p>
                            <p class="fs-30 mb-2">61344</p>
                            <p>22.00% (30 days)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                    <div class="card bg-color">
                        <div class="card-body">
                            <p class="mb-4">Total Bookings</p>
                            <p class="fs-30 mb-2">61344</p>
                            <p>22.00% (30 days)</p>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
@endsection
