<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class SetLanguage extends Component
{
    /**
     * The current language selected.
     *
     * This property holds the current language that is selected by the user.
     *
     * @var string
     */
    public $language;

    /**
     * Flag to determine if description should be shown.
     *
     * @var bool
     */
    public $showDescription = false;

    /**
     * Mount the component and initialize the current language.
     *
     * This method sets the initial language based on the session value for 'language'.
     * If the session value is not set, it will fall back to the application's default locale.
     *
     * The language code is stored in the session, and this method will retrieve it
     * to set the current language for the component.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->language = session('language', config('app.locale'));
    }

    /**
     * Set a new language for the application.
     *
     * This method sets the 'language' session value to the selected language,
     * updates the application's locale, and updates the current language in the component.
     *
     * This is useful when a user switches the language on the frontend,
     * allowing the application to update its language without requiring a page reload.
     *
     * @param string $language The language code to set (e.g., 'en', 'es').
     * @return void
     */
    public function setLanguage($language): void
    {
        session(['language' => $language]); App::setLocale($language);
        $this->language = $language;
        $this->js('window.location.reload()');
    }

    /**
     * Render the component view.
     *
     * This method is responsible for rendering the component's view.
     * It returns the view for the language switcher component.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
        return view('livewire.set-language');
    }
}
