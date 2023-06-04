<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    public $table="mahasiswa";
    protected $primaryKey = "nim";//costum primaryKey
    public $incrementing = false;//mematikan auto increment
    protected $keyType = "string";//custom type primary key
}
