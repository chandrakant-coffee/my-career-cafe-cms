<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolldata extends Model
{
    use HasFactory;
    protected $table= 'enrolldata';
    public $primaryKey='id';
    public $timestamp= true;
}
