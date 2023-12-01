<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#criarImagemCidade{{ isset($key) ? $key : '' }}">
    <i class="bi bi-plus"></i>
    <span>Imagem</span>
</button>

<!-- Modal -->
<div class="modal fade" id="criarImagemCidade{{ isset($key) ? $key : '' }}" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="criarImagemCidade{{ isset($key) ? $key : '' }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="criarImagemCidade{{ isset($key) ? $key : '' }}Label"> Nova Imagem da
                    cidade </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('imagem_cidade.opcoes') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-2">
                        <label for="imagem" class="form-label"> Imagem </label>
                        <input type="file" id="imagem" name="imagem" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="legenda" class="form-label"> Legenda </label>
                        <input name="legenda" id="legenda" class="form-control">
                    </div>

                    <input type="hidden" name="viagem_id" value="{{ $viagem->id ? $viagem->id : '' }}">

                    <div class="m-2 my-4">
                        <button class="btn btn-success"> Cadastrar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
