<?php
namespace App\Traits;


use IPPanel\Client;
use IPPanel\Errors\Error;
use IPPanel\Errors\HttpException;

trait Sms{

    public function sendPattern($user,$patternCode,$arr)
    {
        //dd($arr);
        $client = new Client("ZVglndyt2dqwXygCGLxtuFg48qRl2emwbJajIBgOFJo=");

        try {
            $phone_num = '98'.(int)$user->phone_num;
            /*dd($phone_num);*/
            $pattern = $client->sendPattern($patternCode, "+983000505", $phone_num, $arr);

            return $pattern;
        } catch (Exception|Error|HttpException $e) {
            /*dd($e->unwrap());*/
            /*return $e->unwrap() ;
            echo $e->getCode();*/
            // TODO Sms Error
            /*if ($e->code() == ResponseCodes::ErrUnprocessableEntity) {
                echo "Unprocessable entity";
            }*/
        }

        return true;
    }

}
