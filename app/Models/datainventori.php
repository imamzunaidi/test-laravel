<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_inventori extends Model
{
    use HasFactory;
    protected $table ='data_inventori';
    protected $guarded = ['id'];
}
