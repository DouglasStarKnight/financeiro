<x-layout>
  <div class="main-content">
    <div class="py-3 mb-5 bg-info bg-opacity-10 border border-info rounded text-center">
      <h2 class="fw-bold m-0">Descrição do Problema</h2>
    </div>
    <div class="bg-body-secondary border mb-4"></div>

    <div class="row">
        <form action="{{route('descricao.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <textarea name="descricao" class="form-control" id="descricaoProblema" placeholder="Descreva o Problema que está ocorrendo"></textarea>
            </div>
            <div class="col-12">
                <label for="imagem" class="form-label">Anexe imagens do problema</label>
                <input class="form-control" name="imagens[]" type="file" id="imagem" multiple>
            </div>
            <div>
                <button type="submit">SALVAR</button>
            </div>
        </form>
    </div>

  </div>
</x-layout>
<style>
  .table-body-secondary {
    background-color: rgba(var(--bs-secondary-bg-rgb), var(--bs-bg-opacity));
  }

  .text-color {
    background: linear-gradient(45deg, #6b8cff, #8b9fff);
  }
</style>
