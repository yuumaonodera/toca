<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == '/verror') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content' => 'required | max:20 | string'

        ];
    }
    public function messages()
    {
        return [
            'content.required' => 'Todoを入力してください'
            'content.max:20' => 'Todoを20文字以内に入力してください'
        ];
    }
    protected function getRedirectUrl()
    {
        return 'index';
    }
}
