<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines (Indonesian)
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut berisi pesan kesalahan default yang digunakan oleh
    | kelas validator.
    |
    */

    'required' => ':attribute wajib diisi.',
    'email' => ':attribute harus berupa alamat email yang valid.',
    'max' => [
        'string' => ':attribute tidak boleh lebih dari :max karakter.',
    ],
    'min' => [
        'string' => ':attribute harus memiliki minimal :min karakter.',
    ],
    'string' => ':attribute harus berupa teks.',
    'in' => ':attribute yang dipilih tidak valid.',
    'accepted' => ':attribute harus diterima.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'full_name' => 'nama lengkap',
        'email' => 'email',
        'phone_number' => 'nomor telepon',
        'company_name' => 'nama perusahaan',
        'product_interest' => 'produk yang diminati',
        'message' => 'pesan',
        'privacy_accepted' => 'pernyataan privasi',
    ],

];
