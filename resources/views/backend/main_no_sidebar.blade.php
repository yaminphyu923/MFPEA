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

    @yield('style')

</head>

<body>
    <div class="container-scroller">

        @include('backend.nav')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3">
                @include('backend.flash_message')
                @yield('content')

                {{-- <footer class="footer mt-auto">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            2022.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed by MMCities<i
                                class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer> --}}
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
        });
    </script>

    @yield('script')
</body>

</html>
