<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        "logo",
        "fevicon",
        "email",
        "facebook",
        "twitter",
        "linkdin",
        "instragram",
        "youtube",
        "whatsapp",
        "address_one_title",
        "address_one_mobile_1",
        "address_one_mobile_2",
        "address_one_email",
        "address_one_address",
        "address_two_title",
        "address_two_mobile_1",
        "address_two_mobile_2",
        "address_two_email",
        "address_two_address",
        "office_hour",
        "about_us"
    ];
}
