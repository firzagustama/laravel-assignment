<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email_address', 'phone_number', 'message'
    ];
}
