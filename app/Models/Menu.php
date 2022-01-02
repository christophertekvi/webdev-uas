<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menu m, jadwal j, jadwal_catering jc";
    public $primaryKey = "id_menu, id_jadwal";
    //Primary key nya adalah varchar
    public $incrementing = false;

    //Timestamp di false
    public $timestamps = false;


}
