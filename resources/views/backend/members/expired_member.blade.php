@extends('backend.main_no_sidebar')

@section('expired-member-active', 'active')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>Expired Members <small>Members listing</small></b></h4>
                    <div class="justify-content-end">
                        <a href="{{ route('dashboard') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme mb-1"><i class="fas fa-bars"></i>
                                <b>Menu</b></button>
                        </a>

                        <a href="{{ route('members.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme mb-1"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="datatable table table-stripped table-hover">
                    <thead class="bth-theme text-white">
                        <tr>
                            <th>ID</th>
                            <th>Contact Person</th>
                            <th>M/S No(ID No)</th>
                            <th>Member Type</th>
                            <th>Company Name/Address</th>
                            {{-- <th>Product Item</th> --}}
                            <th>Telephone Number</th>
                            {{-- <th>Fax</th> --}}
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($annual_fees as $annual_fee)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $annual_fee->member != null ? $annual_fee->member->contact_person : '' }}</td>
                                <td>{{ $annual_fee->member != null ? $annual_fee->member->ms_no : '' }}</td>
                                <td>{{ $annual_fee->member != null ? $annual_fee->member->memberType->member_type_name : '' }}
                                </td>
                                <td>{{ $annual_fee->member != null ? $annual_fee->member->company_name_address : '' }}
                                </td>
                                {{-- <td>{{ $member->product_item }}</td> --}}
                                <td>{{ $annual_fee->member != null ? $annual_fee->member->phone_no : '' }}</td>
                                {{-- <td>{{ $member->fax }}</td> --}}
                                <td>{{ $annual_fee->member != null ? $annual_fee->member->email : '' }}</td>
                                <td>

                                    <a href="{{ route('send-mail', $annual_fee->member->id) }}">
                                        <button type="button" class="btn btn-sm btn-primary btn-theme px-2">
                                            Send Mail</button>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
