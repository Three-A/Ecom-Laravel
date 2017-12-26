<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['nama','nama_bank','no_bank','Jumlah_Transfer','image','bayar'];
}
