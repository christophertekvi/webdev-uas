<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transaksi_beli";
    public $primarykey = "ID_TB";

    public $incrementing = false;
    public $timestamps = false;
}
