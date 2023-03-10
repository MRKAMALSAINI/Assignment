<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaninesModel extends Model
{
    use HasFactory;

    protected $table = 'company';
    protected $fillable = ['name','email','url','file'];
    public $timestamps = false;
}
