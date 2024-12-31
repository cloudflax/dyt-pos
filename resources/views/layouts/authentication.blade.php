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

<body>
    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="mb-4 pb-2">
                            <a href="index" class="d-block auth-logo">
                                <img src="{{ asset('build/images/logo-dark.png') }}" alt="" height="30"
                                    class="auth-logo-dark me-start">
                                <img src="{{ asset('build/images/logo-light.png') }}" alt="" height="30"
                                    class="auth-logo-light me-start">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <livewire:set-language :showDescription="true" />
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center p-4">
                            <p>© 2025 DYT POS. {{ __('labels.crafted_with_by') }} Cloudflax
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/app.js'])
    @livewireScripts

    @section('scripts')
        <script src="{{ asset('build/js/pages/pass-addon.init.js') }}"></script>
    @endsection

    @include('layouts.vendor-scripts')
</body>

</html>
