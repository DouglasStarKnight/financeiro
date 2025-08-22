<?php

namespace App\Modules\DashboardCustomer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DashboardController extends controller {

  public function findAll(){
  return view('dashboard');
}
}