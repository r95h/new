<?php
namespace App\Models;
class student {

     public static function all(){

            $students =[
               [
                    'id'=> 1,
                    'name' => "reham",
                    'email' => "reham@gmail.com"
               ],
               [
                    'id'=> 2,
                    'name' => "sara",
                    'email' => "sara@gmail.com"
               ],
               [
                    'id'=> 3,
                    'name' => "nada",
                    'email' => "nada@gmail.com"
               ],
               [
                    'id'=> 4,
                    'name' => "ahmed",
                    'email' => "ahmed@gmail.com"
               ],
               [
                    'id'=> 5,
                    'name' => "mohamed",
                    'email' => "mohamed@gmail.com"
               ],
            ];
        return $students;
        }
}