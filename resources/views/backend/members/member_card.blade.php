<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('icons/mfpea.png') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/datatable/datatable.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/datatable/datatable.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('customs/backend.css') }}">

    <style type="text/css" media="print">
        @page {
            /* size: auto; */
            /* auto is the initial value */
            margin: 0;
            /* this affects the margin in the printer settings */
        }

        @media print {

            .print-btn,
            .back-btn {
                display: none;
            }
        }
    </style>

</head>

<body>
    <div class="container content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('members.index') }}">
                        <button type="button" class="btn btn-md btn-primary btn-theme back-btn mt-2"><i
                                class="fas fa-hand-point-left"></i>
                            <b>Back</b></button>
                    </a>

                    <button type="button" class="btn btn-primary btn-md btn-theme front-print print-btn mt-2"><i
                            class="fas fa-print"></i> Front
                        Print</button>
                </div>

                <div class="front-card">
                    <div class="row">
                        <div class="col-sm-2 offset-sm-2">
                            <img src="{{ asset('icons/mfpea.png') }}" alt="">
                        </div>
                        <div class="col-sm-6 text-center">
                            <h3><b>MYANMAR FOOD PROCESSORS</b></h3>
                            <h3><b>AND EXPORTERS ASSOCIATION</b></h3>

                            <hr>

                            <h3><b>MEMBERSHIP CARD</b></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2 offset-sm-2">
                            @if ($member->photo)
                                <img src="{{ asset('photos/members/' . $member->photo) }}" alt=""
                                    style="width:120px;height:120px;" class="img-thumbnail">
                            @else
                                <img src="{{ asset('photos/icons/user.png') }}" alt=""
                                    style="width:120px;height:120px;" class="img-thumbnail">
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <div class="row my-3">
                                <div class="col-sm-4">
                                    <b>Name</b>
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
                                    <b>Member No</b>
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
                                    <b>Position</b>
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
                                <div class="col-sm-6 offset-sm-6 text-center">
                                    ____________________________________
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-6 offset-sm-6 text-center">
                                    General Secretary
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary btn-md btn-theme back-print print-btn"><i
                            class="fas fa-print"></i> Back
                        Print</button>
                </div>

                <div class="back-card">
                    <div class="row my-3">
                        <div class="col-sm-2 offset-sm-2">
                            <b>Address</b>
                        </div>
                        <div class="col-sm-1">
                            :
                        </div>
                        <div class="col-sm-7">
                            {{ $member->company_name_address }}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm-2 offset-sm-2">
                            <b>Phone No.</b>
                        </div>
                        <div class="col-sm-1">
                            :
                        </div>
                        <div class="col-sm-7">
                            {{ $member->phone_no }}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm-2 offset-sm-2">
                            <b>Date of Issue</b>
                        </div>
                        <div class="col-sm-1">
                            :
                        </div>
                        <div class="col-sm-7">
                            {{ $member->created_at->format('d-M-Y') }}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm-2 offset-sm-2">
                            <b>Expired Date</b>
                        </div>
                        <div class="col-sm-1">
                            :
                        </div>
                        <div class="col-sm-7">
                            {{ date('d-M-Y', strtotime($member->exp_date)) }}
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm-6 offset-sm-6 text-center">
                            ____________________________________
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-6 offset-sm-6 text-center">
                            Member's Signature
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('template/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('template/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('template/datatable/datatable.min.js') }}"></script>

    <script src="{{ asset('template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/js/template.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <script src="{{ asset('template/js/todolist.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.front-print').on('click', function() {
                $('.print-btn').hide();
                $('.sidebar').hide();
                $('.back-card').hide();
                window.print();
            });

            $('.back-print').on('click', function() {
                $('.print-btn').hide();
                $('.sidebar').hide();
                $('.front-card').hide();
                window.print();
            });

            $('.content-wrapper').on('mouseover', function() {
                $('.print-btn').show();
                $('.sidebar').show();
                $('.front-card').show();
                $('.back-card').show();
            })
        })
    </script>

</body>

</html>
