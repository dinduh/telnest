<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fiallable = ['houtel_id', 'room_id', 'check_in_date', 'check_out', 'bank_id', 'phone', 'email'];

    public function order()
    {
        return $this->belongsTo(Houtel::class, 'houtel_id', 'id');
    
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'houtel_id', 'id');
    }

    public function bank()
    {
        return $this->hasMany(order::class, 'bank_id ', 'id');
    }


}
