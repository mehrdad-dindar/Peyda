<?php
namespace App\Traits;

use App\Models\Email;

trait Emails{

    public function addEmail($model)
    {
        /*$result=0;
        $request=Email::query()->create([

            'emailable_id'=>$email->getEmailableId(),
            'emailable_type'=>$email->getEmailableType(),

        ]);*/
        $email = new Email();

        $request = $model->emails()->save($email);

        /*if ($request!=null){
            $result=$request;
        }else{
            $result=null;
        }*/

        return $request;
    }

}
