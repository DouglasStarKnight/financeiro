<?php

namespace App\Modules\Signature;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SignatureController extends controller {

  public function findAll(){
  return view('signature.index');
}
}