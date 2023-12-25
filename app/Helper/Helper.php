<?php
namespace App\Helper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
class Helper
{

    public static function todayDate()
    {
        return Carbon::now()->format('Y-m-d');
    }
    public static function todayDateTime()
    {
        return Carbon::now()->format('M d, Y , h:i A');
    }
    public static function dateFormat($date)
    {
        return Carbon::parse($date)->format('M d, Y');
    }
    
    public static function datetimeFormat($date)
    {
        return Carbon::parse($date)->format('M d, Y , h:i A');
    }
    
}