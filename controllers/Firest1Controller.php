<?php

namespace app\controllers;

class Firest1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title='สายย่อ';
        
        $person=[
            ['fname'=>'สมใจ','lname'=>'ตูดี', 'email'=>'somjai@hotmail.com'],
            ['fname'=>'สมน้ำ','lname'=>'สมเนื้อ', 'email'=>'somnam@hotmail.com'],
            ['fname'=>'สมส้ม','lname'=>'น้ำส้ม', 'email'=>'somsom@hotmail.com'],
        ];
        return $this->render('index',['title'=>$title,'person'=>$person,]);
    }

}
