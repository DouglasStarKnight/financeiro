<x-layout>
  <x-modal modal_id="modal-info" title="Informações">
    @include('signature.form.info')
  </x-modal>
  <x-modal modal_id="modal-ativa-desativa" title="Informações">
    @include('signature.form.ativa-desativa')
    <x-slot name="footer">
      <button class="bg-primary rounded text-light border-0 p-2"> Confirmar</button>
    </x-slot>
  </x-modal>
  <x-modal modal_id="modal-edit" title="Informações">
    @include('signature.form.edita-assinatura')
    <x-slot name="footer">
      <button class="bg-primary rounded text-light border-0 p-2"> Confirmar</button>
    </x-slot>
  </x-modal>

  <div class="main-content">
    <div class="py-3 mb-5 bg-info bg-opacity-10 border border-info rounded text-center">
      <h2 class="fw-bold m-0">Assinatura</h2>
    </div>
    <div class="bg-body-secondary border mb-4"></div>

    <div class="border border-bottom-0 bg-body-secondary rounded-top text-start col-3">
      <h5 class="m-0 ps-3">Detalhes Dos Planos ativos</h5>
    </div>
    <div class="bg-body-secondary p-2 mb-5 d-flex">
      <div class="card text-center mb-3 me-2" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Game Pass</h5>
          <p class="card-text">Sistema de coisar jogos.</p>
          <a href="#" class="btn btn-primary">Informações</a>
        </div>
      </div>
      <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Only</h5>
          <p class="card-text">Faz o L</p>
          <x-botaoModal modal_id="modal-info">Informações</x-botaoModal>
        </div>
      </div>
    </div>


    <div class="border border-bottom-0 bg-body-secondary rounded-top text-start col-3">
      <h5 class="m-0 ps-3">Serviços do usuário</h5>
    </div>
    <div class="bg-body-secondary p-3 rounded-bottom">
      <div class="rounded table-responsive">
        <table class="table table-body-secondary">
          <thead class="table-body-secondary">
            <tr>
              <th class="width:auto">#</th>
              <th class="width:auto">Nome</th>
              <th class="width:auto">Valor</th>
              <th class="width:auto">Status</th>
              <th class="width:auto">Pagamento</th>
              <th class="width:auto">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Game Pass</td>
              <td>R$ 59,99</td>
              <td class="text-success">Ativa</td>
              <td>Pix</td>
              <td>
                <div class="row">
                  <div class="col-6">
                    <x-botaoModal modal_id="modal-edit" >Editar</x-botaoModal>
                  </div>
                  <div class="col-6">
                    <x-botaoModal modal_id="modal-ativa-desativa" class="bg-danger text-light">Desativar</x-botaoModal>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Netflisco</td>
              <td>R$ 45,50</td>
              <td class="text-danger">Inativa</td>
              <td>Dinheiro</td>
              <td>
                <div class="row">
                  <div class="col-6">
                    <x-botaoModal modal_id="modal-edit" >Editar</x-botaoModal>
                  </div>
                  <div class="col-6">
                    <x-botaoModal modal_id="modal-ativa-desativa" class="bg-success text-light">ativa</x-botaoModal>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="col-1">3</td>
              <td class="col-2">only</td>
              <td class="col-1">R$ 459,90</td>
              <td class="text-success col-1">Ativa</td>
              <td class="col-2">Cartão de Crédito</td>
              <td class="col-2">
                <div class="row">
                  <div class="col-6">
                    <x-botaoModal modal_id="modal-edit" >Editar</x-botaoModal>
                  </div>
                  <div class="col-6">
                    <x-botaoModal modal_id="modal-ativa-desativa" class="bg-danger text-light">Desativar</x-botaoModal>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
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
