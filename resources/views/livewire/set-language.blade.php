<div class="dropdown d-inline-block language-switch ms-2">
    <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="header-lang-img"
            src="{{ asset('build/images/flags/' . ($language === 'es' ? 'spain.jpg' : 'us.jpg')) }}" alt="Header Language"
            height="18">
        @if (isset($showDescription) and $showDescription)
            <span class="fw-bold">
                {{ $language === 'es' ? __('labels.languages.spanish_latin_america') : __('labels.languages.english') }}
            </span>
        @endif
    </button>
    <div class="dropdown-menu">
        <a href="javascript:void(0);" wire:click="setLanguage('en')" class="dropdown-item notify-item language">
            <img src="{{ asset('build/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12">
            <span class="align-middle">{{ __('labels.languages.english') }}</span>
        </a>
        <a href="javascript:void(0);" wire:click="setLanguage('es')" class="dropdown-item notify-item language">
            <img src="{{ asset('build/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12">
            <span class="align-middle">{{ __('labels.languages.spanish_latin_america') }}</span>
        </a>
    </div>
</div>
