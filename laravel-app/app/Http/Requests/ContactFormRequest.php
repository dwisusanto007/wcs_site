<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactFormRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'max:50', 'regex:/^[0-9\s\+\-\(\)]+$/'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'product_interest' => ['required', Rule::in(['infrastructure', 'application', 'service', 'non-erp', 'electronic-security'])],
            'message' => ['nullable', 'string', 'max:5000'],
            'privacy_accepted' => ['required', 'accepted'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'full_name.required' => __('contact.validation.full_name_required'),
            'email.required' => __('contact.validation.email_required'),
            'email.email' => __('contact.validation.email_invalid'),
            'phone_number.required' => __('contact.validation.phone_number_required'),
            'phone_number.regex' => __('contact.validation.phone_number_invalid'),
            'product_interest.required' => __('contact.validation.product_interest_required'),
            'product_interest.in' => __('contact.validation.product_interest_invalid'),
            'privacy_accepted.required' => __('contact.validation.privacy_accepted_required'),
            'privacy_accepted.accepted' => __('contact.validation.privacy_accepted_required'),
        ];
    }
}
