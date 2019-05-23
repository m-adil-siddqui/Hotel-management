<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reservation;
class Customer extends Model
{
    protected $guarded = [];

    // protected  $fillable = [
    //    'title', 'fname', 'lname', 'email', 'nationality', 'country', 'phone'
    // ];
    public function reservations()
    {
    	return $this->hasMany('\App\Reservation');
    }

    public function payments()
    {
    	return $this->hasMany('\App\Payment');
    }

}
