<title>@yield('title') | HOE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Muhammad Ahsan, design by: ">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/animate-css/vivify.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('public/assets/css/site.min.css') }}">
<link rel="icon" href="{{ asset('public/assets/favicon.ico') }}" type="image/x-icon">

<link rel="stylesheet" href="{{ asset('public/assets/vendor/c3/c3.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/assets/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">

<link rel="stylesheet" href="{{ asset('public/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/sweetalert/sweetalert.css') }}" />

<style>
    td.details-control {
        background: url('{{ asset('public/assets/images/details_open.png') }}') no-repeat center center;
        cursor: pointer;
    }

    tr.shown td.details-control {
        background: url('{{ asset('public/assets/images/details_close.png') }}') no-repeat center center;
    }
</style>
