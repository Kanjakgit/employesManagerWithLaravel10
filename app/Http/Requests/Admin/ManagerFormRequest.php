<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ManagerFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required','string','min:3','max:100'],
            'prenom' => ['required','string','min:3','max:100'],
            'genre' => ['required','in:M,F'],
            'telephone' => ['required','string','min:10'],
            'adresse' => ['required','string','min:3','max:255'],
            'departement' => ['required','exists:departements,depart_nom'],
            'salaire' => ['required','integer','min:10'],
            'poste' => ['required','string','min:3','max:255'],
            'dateNaissance' => ['required','date']
        ];
    }
}
