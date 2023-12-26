<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekersModel extends Model
{
    use HasFactory;
    protected $table= 'job_seekers';
    public $primaryKey='id';
}
