<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Feel free to tweak each of these messages here.
    |
    */

    'required' => 'The :attribute field is required.',
    'email' => 'The :attribute field must be a valid email address.',
    'max' => [
        'string' => 'The :attribute field must not be greater than :max characters.',
    ],
    'min' => [
        'string' => 'The :attribute field must be at least :min characters.',
    ],
    'string' => 'The :attribute field must be a string.',
    'in' => 'The selected :attribute is invalid.',
    'accepted' => 'The :attribute must be accepted.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'full_name' => 'full name',
        'email' => 'email',
        'phone_number' => 'phone number',
        'company_name' => 'company name',
        'product_interest' => 'product interest',
        'message' => 'message',
        'privacy_accepted' => 'privacy statement',
    ],

];
