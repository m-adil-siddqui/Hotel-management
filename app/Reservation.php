<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
class Reservation extends Model
{
    protected $guarded = [];

    // protected $fillable = [
    //   'customer_id', 'room', 'bed', 'num_room', 'meal', 'cin', 'cout', 'num_days'
    // ];

    public function customer()
    {
        return $this->belongsTo('\App\Customer');
    }
}
