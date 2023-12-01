<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastrarCidade">
    <i class="bi bi-plus"></i>
    <span>Cidade</span>
</button>

<!-- Modal -->
<div class="modal fade" id="cadastrarCidade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="cadastrarCidadeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cadastrarCidadeLabel"> Nova Cidade
                    ente </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('cidade.opcoes') }}" method="POST">
                    @csrf

                    <div class="mt-2">
                        <label for="nome" class="form-label"> Nome </label>
                        <input type="text" id="nome" name="nome" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="descricao" class="form-label"> Descrição </label>
                        <input type="text" id="descricao" name="descricao" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="estado_id" class="form-label"> estado </label>
                        <select name="estado_id" id="estado_id" class="form-control">
                            @if (isset($estados))
                                @foreach ($estados as $key => $estado)
                                    <option value="{{ $estado->id }}"
                                        @if ($key == 0) @selected(true) @endif>
                                        {{ $estado->nome }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="m-2 my-4">
                        <button class="btn btn-success"> Cadastrar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
