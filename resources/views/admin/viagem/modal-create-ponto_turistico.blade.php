<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pontoTuristico">
    <i class="bi bi-plus"></i>
    <span>Ponto Turistico</span>
</button>

<!-- Modal -->
<div class="modal fade" id="pontoTuristico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="pontoTuristicoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="pontoTuristicoLabel"> Novo Ponto Turistico </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('turismo.opcoes') }}" method="POST">
                    @csrf

                    <div class="mt-2">
                        <label for="titulo" class="form-label"> Nome do local </label>
                        <input type="text" id="titulo" name="titulo" class="form-control" maxlength="100" required />
                    </div>
                    <div class="mt-2">
                        <label for="descricao" class="form-label"> Descrição </label>
                        <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" maxlength="5000" required>
                        </textarea>
                    </div>

                    <input type="hidden" name="viagem_id" value="{{ !empty($viagem->id) ? $viagem->id : '' }}">

                    <div class="m-2 my-4">
                        <button class="btn btn-success"> Cadastrar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
