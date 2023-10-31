<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class GetAllCompanyUsers extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'CompanyId' => 'required|exists:Company,Id',
            'ExcludeDevelopers' => 'required|boolean',
        ];
    }
}
