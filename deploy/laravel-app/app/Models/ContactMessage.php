<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'company_name',
        'product_interest',
        'message',
        'privacy_accepted',
        'locale',
    ];

    protected $casts = [
        'privacy_accepted' => 'boolean',
    ];
}
