<?php

namespace App\Modules\Descricao\dto;


use Illuminate\Foundation\Http\FormRequest;

class CreateDescricao extends FormRequest{

  public function authorize(): bool {
    return true;
  }

  public function rules(): array{
    return [
      'descricao' => 'required|string',
      'problema_id' => 'nullable|numeric',
       'imagens'   => 'required|array',
        'imagens.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
    ];
  }

  public function messages(): array {
    return [
      'name.required' => 'Insira alguma descrição para a solicitação.',
      'valor_produto.required' => 'Digite um valor para o Produto.',
      'imagens.required' => 'Anexe pelo menos uma imagem.',
    ];
  }
}
