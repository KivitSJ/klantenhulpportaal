<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends BaseFormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'submitted_by' => 'required|integer',
            'assigned_to' => 'integer|nullabe',
            'category_id' => 'required|integer',
            'priority' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
        ];
    }
}
