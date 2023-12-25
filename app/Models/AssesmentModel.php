<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentModel extends Model
{
    use HasFactory;
    protected $table= 'assesment';
    public $primaryKey='id';
    public $timestamp= true;
}
