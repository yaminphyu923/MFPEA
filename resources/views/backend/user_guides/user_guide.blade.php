@extends('backend.main_no_sidebar')

@section('userguide-active', 'active')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <iframe src="{{ asset('user_guides/mfpea.pdf') }}" width="100%" height="600" alt="pdf" />
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
