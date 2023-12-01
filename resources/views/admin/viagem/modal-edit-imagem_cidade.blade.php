<!-- Modal -->
<div class="modal fade" id="editarImagemCidade{{ isset($key_img_cid) ? $key_img_cid : '' }}" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editarImagemCidade{{ isset($key_img_cid) ? $key_img_cid : '' }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarImagemCidade{{ isset($key_img_cid) ? $key_img_cid : '' }}Label">
                    Editar
                    imagem da cidade </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('imagem_cidade.opcoes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $imagem_cidade->id }}">
                    <input type="hidden" name="caminho" value="{{ $imagem_cidade->caminho }}">
                    <input type="hidden" name="viagem_id" value="{{ $imagem_cidade->viagem_id }}">

                    <div class="mt-2">
                        <label for="imagem" class="form-label"> Imagem </label>
                        <input type="file" id="imagem" name="imagem" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="legenda" class="form-label"> Legenda </label>
                        <input name="legenda" id="legenda" class="form-control" value="{{ $imagem_cidade->legenda }}">
                    </div>

                    <div class="m-2 my-4">
                        @include('admin.viagem.form-delete-imagem_cidade')
                        <button class="btn btn-success"> Editar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
