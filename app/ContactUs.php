<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = "contact";
    protected $fillable =[
      'subject', 'contact_name', 'contact_email',  'contact_message', 'country_id','view'
    ];
}