<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal"
    data-bs-target="#roteiro{{ isset($key_roteiro) ? $key_roteiro : '' }}">
    <i class="bi bi-pencil"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="roteiro{{ isset($key_roteiro) ? $key_roteiro : '' }}" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="roteiro{{ isset($key_roteiro) ? $key_roteiro : '' }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="roteiro{{ isset($key_roteiro) ? $key_roteiro : '' }}Label"> Editar
                    Roteiro de Viagem
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('roteiro.opcoes') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $roteiro->id }}">

                    <div class="mt-2">
                        <label for="titulo" class="form-label"> Titulo </label>
                        <input type="text" id="titulo" name="titulo" class="form-control"
                            value="{{ $roteiro->titulo }}" maxlength="100" required />
                    </div>
                    <div class="mt-2">
                        <label for="subtitulo_manha" class="form-label"> Roteiro da Manhã </label>
                        <input type="text" name="subtitulo_manha" placeholder="Titulo -> Manhã: Chegada"
                            class="mb-2 form-control" value="{{ $roteiro->subtitulo_manha }}" maxlength="100" required>
                        <textarea name="manha" maxlength="1000" required id="manha" cols="30" rows="4" class="form-control">
                            {{ $roteiro->manha }}
                        </textarea>
                    </div>
                    <div class="mt-2">
                        <label for="subtitulo_tarde" class="form-label"> Roteiro da Tarde </label>
                        <input type="text" name="subtitulo_tarde" placeholder="Titulo -> Tarde: Chegada"
                            class="mb-2 form-control" value="{{ $roteiro->subtitulo_tarde }}" maxlength="100" required>
                        <textarea name="tarde" maxlength="1000" required id="tarde" cols="30" rows="4" class="form-control">
                            {{ $roteiro->tarde }}
                        </textarea>
                    </div>
                    <div class="mt-2">
                        <label for="subtitulo_noite" class="form-label"> Roteiro da Noite </label>
                        <input type="text" name="subtitulo_noite" placeholder="Titulo -> Noite: Chegada"
                            class="mb-2 form-control" value="{{ $roteiro->subtitulo_noite }}" maxlength="100" required>
                        <textarea name="noite" maxlength="1000" required id="noite" cols="30" rows="4" class="form-control">
                            {{ $roteiro->noite }}
                        </textarea>
                    </div>

                    <input type="hidden" name="viagem_id" value="{{ !empty($viagem->id) ? $viagem->id : '' }}">

                    <div class="m-2 my-4">
                        <button class="btn btn-success"> Editar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
