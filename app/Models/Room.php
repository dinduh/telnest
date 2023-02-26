<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fiallable = ['houtel_id','type','price','description','photo'];

    public function  houtels()
    {
        return $this->BelongsTo(Houtel::class, 'houtel_id', 'id');
    }
    
    public function order()
    {
        return $this->HasMany(Order::class, 'room_id', 'id');
    }
}
