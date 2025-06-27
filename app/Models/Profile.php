<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable= ['user_id', 'name', 'surname', 'birthdate', 'phone_number', 'address', 'city', 'country', 'postal_code' ];

        public function user(){
        return $this->belongsTo(User::class);
    }
}
