<?php

namespace App\Http\Requests\Account;

use Alvarofpp\ExpandRequest\Traits\UrlParameters;
use App\Rules\SessionUserAccount;
use Illuminate\Foundation\Http\FormRequest;

class DestroyRequest extends FormRequest
{
    use UrlParameters;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'account' => ['required', 'exists:accounts,id', new SessionUserAccount()],
        ];
    }
}
