<!-- Right Sidebar -->
<a class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
    <i class="bx bx-cog icon-sm font-size-18"></i> <span>{{ trans_choice('labels.setting', 1) }}</span>
</a>

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center bg-dark p-3">
            <h5 class="m-0 me-2 text-white">{{ __('labels.theme_customizer') }}</h5>
            <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="m-0" />

        <div class="p-4">
            <form id="layout-settings-form" action="{{ route('theme.customizer') }}" method="POST">
                @csrf

                <h6 class="mb-3">{{ trans_choice('labels.layout', 0) }}</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                        value="vertical" />
                    <label class="form-check-label fw-normal" for="layout-vertical">{{ __('labels.vertical') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal" />
                    <label class="form-check-label fw-normal"
                        for="layout-horizontal">{{ __('labels.horizontal') }}</label>
                </div>

                <h6 class="mt-4">{{ __('labels.layout_mode') }}</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light" />
                    <label class="form-check-label fw-normal" for="layout-mode-light">{{ __('labels.light') }}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                        value="dark" />
                    <label class="form-check-label fw-normal" for="layout-mode-dark">{{ __('labels.dark') }}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-bordered"
                        value="bordered" />
                    <label class="form-check-label fw-normal"
                        for="layout-mode-bordered">{{ __('labels.bordered') }}</label>
                </div>

                <h6 class="mt-4">{{ __('labels.layout_width') }}</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fluid"
                        value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')" />
                    <label class="form-check-label fw-normal" for="layout-width-fluid">{{ __('labels.fluid') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')" />
                    <label class="form-check-label fw-normal" for="layout-width-boxed">{{ __('labels.boxed') }}</label>
                </div>

                <h6 class="mt-4">{{ __('labels.layout_position') }}</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed"
                        value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')" />
                    <label class="form-check-label fw-normal"
                        for="layout-position-fixed">{{ __('labels.fixed') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position"
                        id="layout-position-scrollable" value="scrollable"
                        onchange="document.body.setAttribute('data-layout-scrollable', 'true')" />
                    <label class="form-check-label fw-normal"
                        for="layout-position-scrollable">{{ __('labels.scrollable') }}</label>
                </div>

                <h6 class="mt-4">{{ __('labels.topbar_type') }}</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')" />
                    <label class="form-check-label fw-normal"
                        for="topbar-color-light">{{ __('labels.light') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')" />
                    <label class="form-check-label fw-normal" for="topbar-color-dark">{{ __('labels.dark') }}</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-type-hidden"
                        value="hidden" onchange="document.body.setAttribute('data-topbar', 'hidden')" />
                    <label class="form-check-label fw-normal"
                        for="topbar-type-hidden">{{ __('labels.hidden') }}</label>
                </div>

                <div id="sidebar-setting">
                    <h6 class="mt-4 sidebar-setting">{{ __('labels.sidebar_size') }}</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                            value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')" />
                        <label class="form-check-label fw-normal"
                            for="sidebar-size-default">{{ __('labels.default') }}</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                            value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')" />
                        <label class="form-check-label fw-normal"
                            for="sidebar-size-compact">{{ __('labels.compact') }}</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                            value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')" />
                        <label class="form-check-label fw-normal"
                            for="sidebar-size-small">{{ __('labels.small_icon_view') }}</label>
                    </div>

                    <h6 class="mt-4 sidebar-setting">{{ __('labels.sidebar_color') }}</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                            value="light" onchange="document.body.setAttribute('data-sidebar', 'light')" />
                        <label class="form-check-label fw-normal"
                            for="sidebar-color-light">{{ __('labels.light') }}</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                            value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')" />
                        <label class="form-check-label fw-normal"
                            for="sidebar-color-dark">{{ __('labels.dark') }}</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
                            value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')" />
                        <label class="form-check-label fw-normal"
                            for="sidebar-color-brand">{{ __('labels.brand') }}</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- chat offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
    <div class="offcanvas-header border-bottom">
        <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ...
    </div>
</div>

@push('scripts')
    <script>
        document.querySelectorAll('#layout-settings-form input[type="radio"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                setTimeout(function() {
                    var form = document.getElementById('layout-settings-form');
                    var formData = new FormData(form);

                    fetch(form.action, {
                            method: form.method,
                            headers: {
                                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]')
                                    .value,
                            },
                            body: formData
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                }, 300);
            });
        });
    </script>
@endpush
