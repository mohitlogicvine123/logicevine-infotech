<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
        protected $table='enquiery';

        protected $fillable=[
            'name',
            'email',
            'number',
            'company_name',
            'message'

        ];


}
