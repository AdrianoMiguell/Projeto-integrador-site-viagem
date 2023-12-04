<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal"
    data-bs-target="#pontoTuristico{{ isset($key) ? $key : '' }}">
    <i class="bi bi-pencil"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="pontoTuristico{{ isset($key) ? $key : '' }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="pontoTuristico{{ isset($key) ? $key : '' }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="pontoTuristico{{ isset($key) ? $key : '' }}Label"> Editar Ponto Turistico
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('turismo.opcoes') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{$ponto->id}}">

                    <div class="mt-2">
                        <label for="titulo" class="form-label"> Nome do local </label>
                        <input type="text" id="titulo" name="titulo" value=" {{ $ponto->titulo }}"
                            class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="descricao" class="form-label"> Descrição </label>
                        <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control">
                            {{ $ponto->descricao }}
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
