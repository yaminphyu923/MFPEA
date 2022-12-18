<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MFPEA</title>
    <link rel="icon" type="image/png" href="{{ asset('icons/mfpea.png') }}" />
    <link rel="stylesheet" href="{{ asset('customs/print.css') }}">
</head>

<body id="page-top">

    @yield('content')

    <script src="{{ asset('template/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.print').on('click', function() {
                $('.print-btn').hide();
                window.print();
            });

            $('#page-top').on('mouseover', function() {
                $('.print-btn').show();
            })
        })
    </script>

    @yield('script')
</body>

</html>
