<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;



class RecordCreateRequest extends FormRequest
{
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
            'date' =>[
                Rule::unique('records')->ignore($this->id)->where('user_id', Auth::user()->id)],
        ];
    }
    

    
    /**
     * バリデーションメッセージ
     * @return array
     */
    public function messages()
    {
        return [
        'date.unique' => 'その日付は入力済です'
        ];
    }
}

