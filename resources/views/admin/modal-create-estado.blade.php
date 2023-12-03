@include('admin.modal-edit-estado')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-0" data-bs-toggle="modal" data-bs-target="#criarEstado">
    <i class="bi bi-plus"></i>
    <span>Estado</span>
</button>

{{-- 'nome',
'descricao',
'bandeira',
'pais', --}}

<!-- Modal -->
<div class="modal fade" id="criarEstado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="criarEstadoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="criarEstadoLabel"> Novo Estado </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('estado.opcoes') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-2">
                        <label for="nome" class="form-label"> Nome </label>
                        <input type="text" id="nome" name="nome" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="descricao" class="form-label"> Descrição </label>
                        <input type="text" id="descricao" name="descricao" class="form-control" />
                    </div>
                    <div class="my-2 d-flex justify-content-between gap-2">
                        <div>
                            <label for="bandeira" class="form-label"> Bandeira </label>
                            <input type="file" id="bandeira" name="bandeira" class="form-control" />
                        </div>
                        <div>
                            <label for="pais" class="form-label"> Pais </label>
                            <input type="text" name="pais" id="pais" class="form-control">
                        </div>
                    </div>

                    <div class="m-2 my-4">
                        <button class="btn btn-success"> Cadastrar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
