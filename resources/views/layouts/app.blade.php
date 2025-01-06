<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (isset($title))
            {{ $title }}
        @endif | {{ config('app.name', 'DYT POS') }}
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('build/images/favicon.ico') }}">

    @livewireStyles
    @include('layouts.head-css')
</head>

<body @if ($configs['menus']['isHorizontal']) data-layout="horizontal" @endif>
    <div id="layout-wrapper">
        <!-- topbar -->
        <x-topbar-layout />

        <!-- sidebar components -->
        <x-sidebar-layout />
        <x-horizontal-layout title="{{ $title ?? '' }}" />

        <!-- start right content here -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>

            <!-- footer -->
            <x-footer-layout />
        </div>
    </div>

    @vite(['resources/js/app.js'])
    @livewireScripts

    <!-- customizer -->
    <x-right-sidebar-layout />

    <!-- vendor-scripts -->
    @include('layouts.vendor-scripts')

</body>

</html>
