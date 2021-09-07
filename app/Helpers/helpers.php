<?php
namespace App\Helpers;
use App\Models\NotificationUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Helpers
{
    public static function convertDateTimeToShamsi($created_at)
    {

        if($created_at!=null) {
            /*$d = date('Y-m-d-H-i-s', strtotime($created_at));

            $expD = explode("-", $d);

            $Year = $expD[0];
            $Month = $expD[1];
            $Day = $expD[2];
            $Hour = $expD[3];
            $Minute = $expD[4];
            $Second = $expD[5];*/

            $result =verta()->timestamp(strtotime($created_at))
                ->formatJalaliDatetime();
        }
        else{
            $result='بدون تاریخ';
        }

        return $result;
    }

    public static function toPersianNum($num)
    {
        $persian_num_array = [
            '0'=>'۰',
            '1'=>'۱',
            '2'=>'۲',
            '3'=>'۳',
            '4'=>'۴',
            '5'=>'۵',
            '6'=>'۶',
            '7'=>'۷',
            '8'=>'۸',
            '9'=>'۹',
        ];

        $num = (float) $num;
        return strtr(number_format($num), $persian_num_array);
    }
    public static function toPersianNumOnly($num)
    {
        $persian_num_array = [
            '0'=>'۰',
            '1'=>'۱',
            '2'=>'۲',
            '3'=>'۳',
            '4'=>'۴',
            '5'=>'۵',
            '6'=>'۶',
            '7'=>'۷',
            '8'=>'۸',
            '9'=>'۹',
        ];

        return strtr($num, $persian_num_array);
    }

    public static function toEnglishNum($number)
    {
        $number = str_replace("۱","1",$number);
        $number = str_replace("۲","2",$number);
        $number = str_replace("۳","3",$number);
        $number = str_replace("۴","4",$number);
        $number = str_replace("۵","5",$number);
        $number = str_replace("۶","6",$number);
        $number = str_replace("۷","7",$number);
        $number = str_replace("۸","8",$number);
        $number = str_replace("۹","9",$number);
        $number = str_replace("۰","0",$number);
        return $number;
    }

    public static function arrayToDB($array){
        $serviceList=$prefix='';

        foreach($array as $value){
            // $value

            $serviceList .= $prefix  . $value ;
            $prefix = ',';
        }

        return $serviceList;
    }

    public static function sessionInit()
    {

        @session_start();
    }

    public static function sessionSet($name, $value)
    {

        $_SESSION[$name] = $value;
    }

    public static function sessionGet($name)
    {

        if (isset($_SESSION[$name])) {

            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function saveImageToPath($image,$destinationPath){
        $name=$image->getClientOriginalName();


        //$addressPrimary = '/public/Images/Before/' . $name;
        $image->move($destinationPath, $name);

        return $destinationPath.'/'.$name;
    }

    public static function getOptions(){
        $options=\App\Models\Setting::all();
        $options_new=array();
        foreach ($options as $option){
            $setting=$option['title'];
            $value=$option['value'];
            $options_new[$setting]=$value;
        }

        return $options_new;
    }

}
