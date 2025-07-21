<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
   public function addDate(){
        DB::table('Teacher')->insert([
            'name' => 'Mady',
            'email'  =>'Mady23@gmail.com',
            'subject' =>'Khmer',
            'age' => 99,
        ]);
        return 'Teacher added successfully...!';
   }

   public function getDate(){
    
   }
}
