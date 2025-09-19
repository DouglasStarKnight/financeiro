<?php

namespace App\Modules\Request;

use Exception;

Class RequestService {

    public function __construct(){}

    public function findAll(){
        try{
            return view('request.index');
        }catch(Exception $err){
            // return 
        }
    }
}
