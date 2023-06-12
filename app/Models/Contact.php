<?php

namespace App\Models;

use App\Mail\ContactUs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['name','email','subject','message'];

    use HasFactory;

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "info@dreamspotacademy.com";
            Mail::to($adminEmail)->send(new ContactUs($item));
        });
    }

}
