<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'NIS' => 'unique:students',
            'Name' => 'unique:students',
        ];
    }
    public function messages() {
        return [
            'NIS.unique'=>'NOMOR NIS HARUS BERBEDA DENGAN YANG LAIN {[Development => data ini dari file app\Http\Requests\StudentCreateRequest]} ',
            'Name.unique' => 'NAMA HARUS BERBEDA DENGAN YANG LAIN'
        ];
    }
}
