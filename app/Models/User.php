<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model

{

     protected $fillable = ['role', 'name', 'email', 'password', 'profile_image']; 

        public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}
