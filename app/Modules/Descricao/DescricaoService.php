<?php

namespace App\Modules\Descricao;

use Exception;

class DescricaoService {

    public function __construct(private DescricaoRepository $descricaoRepo){}
   public function findAll(){
     try {
        return view('descricao.index');
    } catch (Exception $err) {
        //throw $th;
    }
   }

   public function create($data, $req){
    try{
        if ($req->hasFile('imagens')) {
        $paths = [];
        foreach ($req->file('imagens') as $file) {
            $paths[] = $file->store('problemas', 'public'); // salva em storage/app/public/problemas
        }
        $data['imagens'] = json_encode($paths); // transforma em JSON para salvar no banco
    }
        $body = [
            'descricao' => isset($data['descricao']) ? $data['descricao'] : null,
            'problema_id' => isset($data['problema_id']) ? $data['problema_id'] : null,
            'imagens' => isset($data['imagens']) ? $data['imagens'] : null,
        ];
        // dd($body);
        $this->descricaoRepo->create($body);
        return redirect()->back()->with(['message' => 'Solicitação criada com sucesso.']);
    } catch (Exception $err) {
        return redirect()->back()->withErrors($err->getMessage());
    }
   }
}
