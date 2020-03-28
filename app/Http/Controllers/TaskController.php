<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function genap()
    {
       echo "<font style='color:#b83b5e; font-weight: 900;'>
                Ini adalah bilangan genap</font><br><br>";
       for ($i=1;$i<=100;$i++){
            if($i%2==0){ 
                echo "$i  ";
            }
        }
    }
}
