<x-authentication-layout>
    <x-slot name="title">Login</x-slot>
    <div class="text-center mt-2">
        <h5>{{ __('labels.routes.login.welcome_back') }}</h5>
        <p class="text-muted">{{ __('labels.routes.login.sign_in_to_continue_to_dyt_pos') }}</p>
    </div>
    <div class="p-2 mt-4">
        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">{{ __('labels.username') }}</label>
                <div class="position-relative input-custom-icon">
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="{{ __('controls.enter_username') }}">
                    <span class="bx bx-user"></span>
                </div>
            </div>
            <div class="mb-3">
                <div class="float-end">
                    <a href="auth-recoverpw"
                        class="text-muted text-decoration-underline">{{ __('labels.forgot_password') }}</a>
                </div>
                <label class="form-label" for="password-input">{{ __('labels.password') }}</label>
                <div class="position-relative auth-pass-inputgroup input-custom-icon">
                    <span class="bx bx-lock-alt"></span>
                    <input type="password" class="form-control" id="password-input" name="password"
                        placeholder="{{ __('controls.enter_password') }}">
                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                    </button>
                </div>
            </div>
            <div class="form-check py-1">
                <input type="checkbox" class="form-check-input" id="auth-remember-check">
                <label class="form-check-label" for="auth-remember-check">{{ __('labels.remember_me') }}</label>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary w-100 waves-effect waves-light"
                    type="submit">{{ __('labels.log_in') }}</button>
            </div>
            <div class="mt-4 text-center">
                <div class="signin-other-title">
                    <h5 class="font-size-14 mb-3 mt-2 title"> {{ __('labels.sign_in_with') }} </h5>
                </div>
                <ul class="list-inline mt-2">
                    <li class="list-inline-item">
                        <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                            <i class="bx bxl-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                            <i class="bx bxl-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-4 text-center">
                <p class="mb-0">{{ __('labels.dont_have_an_account') }} <a href="auth-register"
                        class="fw-medium text-primary"> {{ __('labels.signup_now') }} </a> </p>
            </div>
        </form>
    </div>
</x-authentication-layout>
