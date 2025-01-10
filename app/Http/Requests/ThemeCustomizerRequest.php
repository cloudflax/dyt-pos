<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemeCustomizerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'layout'          => 'required|string|in:vertical,horizontal',
            'layout-mode'     => 'required|string|in:light,dark,bordered',
            'layout-width'    => 'required|string|in:fluid,boxed',
            'layout-position' => 'required|string|in:fixed,scrollable',
            'topbar-color'    => 'required|string|in:light,dark,hidden',
            'sidebar-size'    => 'required|string|in:default,compact,small',
            'sidebar-color'   => 'required|string|in:light,dark,brand',
        ];
    }
}
