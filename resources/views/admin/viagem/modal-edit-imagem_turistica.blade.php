<!-- Modal -->
<div class="modal fade" id="editarImagemTuristica{{ isset($key_img) ? $key_img : '' }}" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editarImagemTuristica{{ isset($key_img) ? $key_img : '' }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarImagemTuristica{{ isset($key_img) ? $key_img : '' }}Label"> Nova
                    Imagem
                    do Ponto Turistico </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('imagem_turistica.opcoes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $imagem->id }}">
                    <input type="hidden" name="caminho" value="{{ $imagem->caminho }}">
                    <input type="hidden" name="viagem_id" value="{{ $imagem->viagem_id }}">
                    <input type="hidden" name="ponto_turistico_id" value="{{ $imagem->ponto_turistico_id }}">

                    <div class="mt-2">
                        <label for="imagem" class="form-label"> Imagem </label>
                        <input type="file" id="imagem" name="imagem" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="legenda" class="form-label"> Legenda </label>
                        <input name="legenda" id="legenda" class="form-control" value="{{ $imagem->legenda }}">
                    </div>

                    <div class="m-2 my-4">
                        @include('admin.viagem.form-delete-imagem_turistica')
                        <button class="btn btn-success"> Editar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
