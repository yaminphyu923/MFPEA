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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('members.index') }}">
                        <button type="button" class="btn btn-md btn-primary btn-theme back-btn mt-2"><i
                                class="fas fa-hand-point-left"></i>
                            <b>Back</b></button>
                    </a>
                    <button type="button" class="btn btn-primary btn-md btn-theme print-btn mt-2"><i
                            class="fas fa-print"></i>
                        Print</button>
                </div>


                <div class="card certificate-card mt-2">
                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-sm-2">
                                <img src="{{ asset('icons/mfpea.png') }}" alt="" class="">
                            </div>

                            <div class="col-sm-10">
                                <h5 class="text-center mt-4">
                                    <b>မြန်မာနိုင်ငံစားသောက်ကုန်ထုတ်လုပ်တင်ပို့ရောင်းချသူများအသင်း</b>
                                </h5>
                                <h5 class="text-center mt-4">
                                    <b>အမှတ် ၂၉၊ မင်းရဲကျော်စွာလမ်း၊ လမ်းမတော်မြို့နယ်၊ ရန်ကုန်မြို့</b>
                                </h5>
                                <h3 class="text-center mt-4">
                                    <b>အသင်းဝင်လက်မှတ်</b>
                                </h3>
                                <h3 class="text-center">
                                    <b>Certificate of Membership</b>
                                </h3>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>၁။ အသင်းဝင်အမည်နှင့်လိပ်စာ</b></h5>
                                <h5 class="pl-4"><b>{{ $member->name_address_myan }}</b></h5>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>1. Name and Address of Member</b></h5>
                                <h5 class="pl-4"><b>{{ $member->company_name_address }}</b></h5>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>၂။ ဆက်သွယ်ရန်နံပါတ်(ဖုန်း/ဖက်စ်/အီးမေးလ်)</b>
                                </h5>
                                <h5 class="pl-4"><b>ဖုန်း - {{ $member->phone_myan }}</b></h5>
                                <h5 class="pl-4"><b>ဖက်စ် - {{ $member->fax_myan }}</b></h5>
                                <h5 class="pl-4"><b>အီးမေးလ် - {{ $member->email }}</b></h5>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>2. Contact Number(Tel/Fax/Email)</b></h5>
                                <h5 class="pl-4"><b>Tel : {{ $member->phone_no }}</b></h5>
                                <h5 class="pl-4"><b>Fax : {{ $member->fax }}</b></h5>
                                <h5 class="pl-4"><b>Email : {{ $member->email }}</b></h5>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>၃။ အသင်းဝင်အမျိုးအစား</b></h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->memberType != null ? $member->memberType->member_type_name : '' }}</b>
                                </h5>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>3. Type of Membership</b></h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->memberType != null ? $member->memberType->member_type_name : '' }}</b>
                                </h5>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>၄။ အသင်းဝင်အမှတ်နဲ့ရက်စွဲ</b></h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->ms_no_myan }}({{ $member->ms_date_myan }})</b>
                                </h5>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>4. Membership Registration No and Date</b>
                                </h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->ms_no }}({{ date('d-M-Y', strtotime($member->ms_date)) }})</b>
                                </h5>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>၅။ လုပ်ငန်းမှတ်ပုံတင်အမှတ်နဲ့ရက်စွဲ</b></h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->business_reg_myan }}({{ $member->business_regdate_myan }})</b>
                                </h5>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>5. Business Registration No and Date</b></h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->business_reg }}({{ date('d-M-Y', strtotime($member->business_regdate)) }})</b>
                                </h5>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>၆။
                                        လျှောက်ထားသူ၏နိုင်ငံသားစိစစ်ရေးကဒ်ပြားအမှတ်</b></h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->nrc }}</b>
                                </h5>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="lineHeight"><b>6. National Registration No and Date</b></h5>
                                <h5 class="pl-4">
                                    <b>{{ $member->nrc_myan }}</b>
                                </h5>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-sm-12">
                                <h5 style="line-height: 40px; text-align:justify;"><b>၇။ အထက်ဖော်ပြပါ
                                        ကုမ္ပဏီ/လျှောက်ထားသူသည်
                                        မြန်မာနိုင်ငံစားသောက်ကုန်ထုတ်လုပ်တင်ပို့
                                        ရောင်းချသူများအသင်း ( ဗဟိုအသင်း ) တွင်
                                        {{ $ms_year }} ခုနှစ်၊ {{ $ms_month }} လ၊
                                        {{ $ms_date }}
                                        ရက်မှစ၍ အသင်းဝင်အမှတ် {{ $member->ms_no }} ဖြင့်
                                        အသင်းဝင်ထားသည့်
                                        အဖွဲ့အစည်း/ပုဂ္ဂလိကအသင်းဝင်တစ်ဦးဖြစ်ပါကြောင်း။</b>
                                </h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <h5 style="line-height: 40px;text-align:justify;">
                                    <b>7. The above-mentioned enterprise/individual is a member of
                                        Myanmar Food
                                        Processors and Exporters Association (CTN) with the membership
                                        number
                                        {{ $member->ms_no }} dated
                                        {{ date('d', strtotime($member->ms_date)) }} (day)
                                        {{ date('F', strtotime($member->ms_date)) }} (month)
                                        {{ date('Y', strtotime($member->ms_date)) }} (year)
                                    </b>
                                </h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 pt-5">
                                <h5 class="text-center">
                                    <b>အထွေထွေအတွင်းရေးမှူ/General Secretary</b>
                                </h5>
                            </div>

                            <div class="col-sm-6 pt-5">
                                <h5 class="text-center">
                                    <b>ဥက္ကဌ/Chairman</b>
                                </h5>
                            </div>
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
            $('.datatable').DataTable({
                "order": [
                    [0, "desc"]
                ],
                "pageLength": 10,
            });

            $('.myselect').select2({
                width: '100%',
                placeholder: "Select an Option",
                allowClear: true
            });

            $('.print-btn').on('click', function() {
                window.print();
            });
        });
    </script>

</body>

</html>
