<?php
namespace App\Helpers;

use Carbon\Carbon;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Http;
use Image;
 
use Illuminate\Support\Facades\DB;
 
class Date {
   
    public static function addDate($val){
        date_default_timezone_set('Asia/Jakarta');
        $date       = date('Y-m-d');
        $format     = str_replace('-', '/', $date);
        $result     = date('Y-m-d',strtotime($format . "+".$val." days"));

        return $result;
    }

    public static function minDate($val){
        $date = date('Y-m-d');
        $result = date('Y-m-d',(strtotime ( '-'.$val.' day' , strtotime ( $date) ) ));

        return $result;
    }

}