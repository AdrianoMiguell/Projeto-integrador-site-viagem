<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createRoteiro">
    <i class="bi bi-plus"></i>
    <span>Roteiro</span>
</button>

<!-- Modal -->
<div class="modal fade" id="createRoteiro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createRoteiroLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createRoteiroLabel"> Novo Roteiro de Viagem </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('roteiro.opcoes') }}" method="POST">
                    @csrf

                    <div class="mt-2">
                        <label for="titulo" class="form-label"> Titulo </label>
                        <input type="text" id="titulo" name="titulo" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="subtitulo_manha" class="form-label"> Roteiro da Manhã </label>
                        <input type="text" name="subtitulo_manha" placeholder="Titulo -> Manhã: Chegada"
                            class="mb-2 form-control">
                        <textarea name="manha" id="manha" cols="30" rows="4" class="form-control">
                        </textarea>
                    </div>
                    <div class="mt-2">
                        <label for="subtitulo_tarde" class="form-label"> Roteiro da Tarde </label>
                        <input type="text" name="subtitulo_tarde" placeholder="Titulo -> Tarde: Chegada"
                            class="mb-2 form-control">
                        <textarea name="tarde" id="tarde" cols="30" rows="4" class="form-control">
                        </textarea>
                    </div>
                    <div class="mt-2">
                        <label for="subtitulo_noite" class="form-label"> Roteiro da Noite </label>
                        <input type="text" name="subtitulo_noite" placeholder="Titulo -> Noite: Chegada"
                            class="mb-2 form-control">
                        <textarea name="noite" id="noite" cols="30" rows="4" class="form-control">
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
