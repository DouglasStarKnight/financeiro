<?php namespace App\Modules\Descricao\dto;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDescricao extends FormRequest {
  public function authorize(): bool {
    return true;
  }

  public function rules(): array{
    return [
        'name' => 'required|string',
      'problema_id' => 'required|numeric',
      'imagens' => 'required|image|mimes:jpeg,png,jpg,webp',
    ];
  }

  // public function messages(): array {
  //   return [
  //     'nome.string' => 'O nome do produto precisar ser texto.',
  //     'valor_produto.string' => 'Digite um valor para o Produto.',
  //     'image.image' => 'Modelo de imagem não aceita.',
  //     'categoria_id.numeric' => 'Escolha uma categoria para o produto.',
  //   ];
  // }
}
