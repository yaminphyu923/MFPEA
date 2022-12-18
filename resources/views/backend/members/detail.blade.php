@extends('backend.main')

@section('member-active', 'active')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>Detail Member</small></b></h4>
                    <div class="justify-content-end">
                        {{-- <a href="">
                        <button type="button" class="btn btn-md btn-primary"><i class="fas fa-id-card"></i><b> Member
                                Card</b></button>
                    </a> --}}
                        <a href="{{ route('members.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            @if ($member->photo)
                <img src="{{ asset('photos/members/' . $member->photo) }}" alt="" style="width:180px;height:180px;">
            @else
                <img src="{{ asset('photos/icons/user.png') }}" alt="" style="width:180px;height:180px;">
            @endif
        </div>
        <div class="col-sm-9">
            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Contact Person</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->contact_person }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>M/S No(ID No)</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->ms_no }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>M/S Date</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ date('d-M-Y', strtotime($member->ms_date)) }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Member Type</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->memberType != null ? $member->memberType->member_type_name : '' }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>NRC</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->nrc }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Business Registration</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->business_reg }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Business Registration Date</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ date('d-M-Y', strtotime($member->business_regdate)) }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Category</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->category != null ? $member->category->name : '' }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Company Name/Address</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->company_name_address }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Product Item</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->product_item }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Phone Number</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->phone_no }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Fax</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->fax }}
                </div>
            </div>
            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Email</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ $member->email }}
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-4">
                    <b>Entrance Fee</b>
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-7">
                    {{ number_format($member->entrance_fee) }}
                </div>
            </div>

            {{-- <div class="row my-3">
            <div class="col-sm-4">
                <b>အသင်းဝင်နာမည်နဲ့လိပ်စာ</b>
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-7">
                {{ $member->name_address_myan }}
            </div>
        </div>

        <div class="row my-3">
            <div class="col-sm-4">
                <b>အသင်းဝင်အမှတ်နဲ့ရက်စွဲ</b>
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-7">
                {{ $member->ms_no_myan }}({{ $member->ms_date_myan }})
            </div>
        </div> --}}

        </div>
    </div>

    <div class="row my-3">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="datatable table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Expired Date</th>
                            <th>Annual Fee</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($annual_fees as $annual_fee)
                            <tr>
                                <td>{{ date('d-M-Y', strtotime($annual_fee->exp_date)) }}</td>
                                <td>{{ number_format($annual_fee->annual_fee) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
