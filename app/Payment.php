<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //protected $guraded = [];
    protected $fillable = [
         'customer_id', 'reservation_id', 'room_price', 'meal_price', 'bed_price', 'total_price'
    ];


    public function reservation()
    {
    	return $this->belongsTo('\App\Reservation');
    }
    public function customer()
    {
    	return $this->belongsTo('\App\Customer');
    }
}
