<?php

namespace App\Modules\Descricao;

use App\Modules\CrudBase\RepositoryBase;

class DescricaoRepository {

    public function __construct(private RepositoryBase $repositoryBase, private DescricaoModel $model){}
    public function create($data){
        // dd($data);
        $this->repositoryBase->create($this->model, $data);
    }
}
