<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $table= 'header';
    public $primaryKey='id';
    public $timestamp= true;
}
