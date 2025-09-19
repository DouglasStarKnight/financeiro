<?php

namespace App\Modules\Descricao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Descricao\dto\CreateDescricao;

class DescricaoController extends controller {

    public function __construct(private DescricaoService $descricaoService){}
  public function findAll(){
  return $this->descricaoService->findAll();
}

public function create(CreateDescricao $req){
    $data = $req->validated();
    $this->descricaoService->create($data, $req);
    return redirect()->back()->with(['message' => 'Solicitação criada com sucesso.']);
}
}
