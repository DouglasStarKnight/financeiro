<?php

namespace App\Modules\Request;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RequestController extends controller {

    public function __construct(private RequestService $requestService){}
  public function findAll(){
    $this->requestService->findAll();
}
}
