<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table1 = "menu";
    protected $table2 = "jadwal";
    protected $table3 = "jadwal_catering";
    public $primaryKey1 = "id_menu";
    public $primaryKey2 = "id_jadwal";
    //Primary key nya adalah varchar
    public $incrementing = false;

    //Timestamp di false
    public $timestamps = false;


}
