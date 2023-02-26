<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    // protected $table = 'cities'; dilakukan jiaka nama model dan tabel berbeda

    protected $fillable = ['nama','photo'];  //faillable adalah  kolom tabel yang boleh di isi
    //protected $guarded = ['nama','photo']; //guarded adalah kolom yang tidak boleh di isi
    public function houtel()
    {
        return $this->hasMany(Houtel::class, 'cities_id', 'id');
    }
}
