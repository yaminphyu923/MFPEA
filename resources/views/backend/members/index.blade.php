@extends('backend.main_no_sidebar')

@section('member-active', 'active')

@section('content')
    <div class="content-wrapper" style="padding:0px !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Members <small>Members listing</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('dashboard') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme mb-1 px-1"><i
                                        class="fas fa-bars"></i>
                                    <b>Menu</b></button>
                            </a>

                            <a href="{{ route('active-member') }}">
                                <button type="button" class="btn btn-md btn-theme btn-primary mb-1 px-2"><i
                                        class="fas fa-users"></i>
                                    <b>Active</b></button>
                            </a>

                            <a href="{{ route('near-expired-member') }}">
                                <button type="button" class="btn btn-md btn-theme btn-primary mb-1 px-2"><i
                                        class="fas fa-users"></i>
                                    <b>Near Expire</b></button>
                            </a>

                            <a href="{{ route('expired-member') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme mb-1 px-2"><i
                                        class="fas fa-users"></i>
                                    <b>Expired</b></button>
                            </a>

                            <button type="button" class="btn btn-md btn-theme btn-primary mb-1 px-2" data-toggle="modal"
                                data-target="#excel_import"><i class="fas fa-file-import"></i>
                                <b>Excel Import</b></button>

                            <a href="{{ route('member-export') }}">
                                <button type="button" class="btn btn-md btn-theme btn-primary mb-1 px-2"><i
                                        class="fas fa-file-export"></i>
                                    <b>Excel Export</b></button>
                            </a>

                            @if ($limit->limit_member >= count($members))
                                <a href="{{ route('members.create') }}">
                                    <button type="button" class="btn btn-md btn-primary btn-theme mb-1 px-1"><i
                                            class="fas fa-user-plus"></i>
                                        <b>Add Member</b></button>
                                </a>
                            @endif

                            <a href="{{ route('member-types.index') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme mb-1 px-1"><i
                                        class="fas fa-plus-circle"></i>
                                    <b>Member Type</b></button>
                            </a>

                            <a href="{{ route('business-types.index') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme mb-1 px-1"><i
                                        class="fas fa-plus-circle"></i>
                                    <b>Business Type</b></button>
                            </a>

                            <a href="{{ route('categories.index') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme mb-1 px-1"><i
                                        class="fas fa-plus-circle"></i>
                                    <b>Category</b></button>
                            </a>

                            <a href="{{ route('groups.index') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme mb-1 px-1"><i
                                        class="fas fa-plus-circle"></i>
                                    <b>Group</b></button>
                            </a>

                            @if (auth()->user()->getRoleNames()[0] == 'Superadmin')
                                <a href="{{ route('increase_member', $limit->id) }}"><button type="button"
                                        class="btn btn-md btn-info btn-theme mb-1 px-1"><i
                                            class="fas fa-sort-numeric-up"></i>
                                        Increase Limit</button></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-2">

                <div class="form-group row">
                    <div class="col-sm-12 mb-3">
                        <label for="">Search by Category</label>
                        <select name="category_id" id="searchCategory" class="form-control myselect">
                            <option></option>
                            <option value="all" @if (request()->category_id == 'all') selected @endif>All</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == request()->category_id) selected @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="">Search by Member Type</label>
                        <select name="member_type_id" id="searchMemberType" class="form-control myselect">
                            <option></option>
                            <option value="all" @if (request()->category_id == 'all') selected @endif>All</option>
                            @foreach ($member_types as $member_type)
                                <option value="{{ $member_type->id }}" @if ($member_type->id == request()->member_type_id) selected @endif>
                                    {{ $member_type->member_type_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 text-end">
                <form action="{{ route('member-approveall') }}" method="GET">
                    @csrf

                    <button type="submit" class="btn btn-md btn-primary btn-theme mb-2">Approve All</button>
                </form>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('member-import') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal fade" id="excel_import" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Excel Import</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row offset-sm-1">
                                        <label for="member_excel">Member Excel:</label>
                                        <div class="col-sm-11">
                                            <input type="file" name="member_excel" id="member_excel"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="datatable table table-stripped table-hover">
                        <thead class="btn-theme text-white">
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
                            @foreach ($members as $member)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $member->contact_person }}</td>
                                    <td>{{ $member->ms_no }}</td>
                                    <td>{{ $member->memberType != null ? $member->memberType->member_type_name : '' }}
                                    </td>
                                    <td>{{ $member->company_name_address }}</td>
                                    {{-- <td>{{ $member->product_item }}</td> --}}
                                    <td>{{ $member->phone }}</td>
                                    {{-- <td>{{ $member->fax }}</td> --}}
                                    <td>{{ $member->email }}</td>
                                    <td class="d-flex justify-content-evenly">
                                        <form action="{{ route('member-approve', $member->id) }}" method="POST"
                                            style="display: inline !important;">
                                            @csrf
                                            @method('PUT')
                                            @if ($member->status != 1)
                                                <button type="submit" class="btn btn-sm btn-success btn-theme px-2">

                                                    Approve</button>
                                            @endif
                                        </form>

                                        <a href="{{ route('member-card', $member->id) }}">
                                            <button type="button" class="btn btn-sm btn-secondary btn-theme px-2">
                                                Card</button>
                                        </a>

                                        <a href="{{ route('member-certificate', $member->id) }}">
                                            <button type="button" class="btn btn-sm btn-success btn-theme px-2">
                                                Certificate</button>
                                        </a>

                                        <a href="{{ route('members.show', $member->id) }}"><button type="button"
                                                class="btn btn-sm btn-info btn-theme px-2">
                                                Detail</button></a>

                                        <a href="{{ route('members.edit', $member->id) }}"><button type="button"
                                                class="btn btn-sm btn-warning btn-theme px-2">
                                                Edit</button></a>

                                        <form action="{{ route('members.destroy', $member->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger btn-theme btn-sm px-2" type="submit"
                                                id="{{ $member->id }}">
                                                Delete</button>
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
        $('#searchCategory').change(function() {
            var category_id = $('#searchCategory').val();
            history.pushState(null, '', `?category_id=${category_id}`);
            window.location.reload();
        })

        $('#searchMemberType').change(function() {
            var member_type_id = $('#searchMemberType').val();
            history.pushState(null, '', `?member_type_id=${member_type_id}`);
            window.location.reload();
        })
    </script>
@endsection
