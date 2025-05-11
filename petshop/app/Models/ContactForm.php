<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contact_form'; // tablo adı özel çünkü
protected $fillable = ['name', 'surname', 'email', 'subject', 'message'];

}
