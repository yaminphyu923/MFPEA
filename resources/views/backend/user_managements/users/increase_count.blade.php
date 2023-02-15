@extends('backend.main')

@section('user_management-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Increase Count</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('users.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">

                    </div>

                    <form action="{{ route('increase_count_add', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-md-4 text-md-end text-right"><b>Limit
                                        User</b></label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="number" name="limit_user" class="form-control" autocomplete="off"
                                        value="{{ $user->limit_user }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10 offset-sm-2 my-0 text-center mb-3">
                                    <button type="submit" class="btn btn-md w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Save</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
