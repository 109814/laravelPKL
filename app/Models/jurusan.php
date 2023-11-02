<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $fillable = ['id','kaprog', 'jurusan','excerptjurusan','ringkasan','color'];
    // protected $guard = ['id'];
}
