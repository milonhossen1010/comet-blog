@php
    $settings = App\Models\settings::find(1);
    $json = $settings->site_identity;
    $site_identity = json_decode($json);
@endphp

<!DOCTYPE html>
<html lang="en">




<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="shortcut icon" href="{{ asset('/') }}media/images/logo/{{ $site_identity->fev_icon }}" type="image/x-icon">
    <title>@yield('title', 'Dashboard') | {{ $site_identity -> tagline }}</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/chartist.css">

     <!-- jsgrid css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/jsgrid.css">

    <!-- Toastr css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/toastr.min.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/admin.css">

    <!-- My custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/my-editor/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/css/custom-css/style.css">
    @include('backend.layouts.particals.style')
</head>