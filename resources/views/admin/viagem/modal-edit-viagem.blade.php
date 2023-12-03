<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#editarRoteiroViagem{{ isset($key) ? $key : '' }}">
    <i class="bi bi-pencil"></i>
    <span>Viagem</span>
</button>

<!-- Modal -->
<div class="modal fade" id="editarRoteiroViagem{{ isset($key) ? $key : '' }}" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarRoteiroViagem{{ isset($key) ? $key : '' }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarRoteiroViagem{{ isset($key) ? $key : '' }}Label"> Editar descrição de
                    Viagem
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('viagem.opcoes') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $viagem->id }}">

                    <div class="mt-2">
                        <label for="titulo" class="form-label"> Titulo </label>
                        <input type="text" id="titulo" name="titulo" class="form-control"
                            value="{{ $viagem->titulo }}" />
                    </div>
                    <div class="mt-2">
                        <label for="descricao" class="form-label"> Descrição </label>
                        <textarea name="descricao" id="descricao" cols="30" rows="10" maxlength="5000" minlength="25"
                            class="form-control"> {{ $viagem->descricao }} </textarea>
                    </div>
                    <div class="mt-2">
                        <label for="sugestoes" class="form-label"> Sugestões </label>
                        <textarea name="sugestoes" id="sugestoes" maxlength="5000" minlength="25" cols="30" rows="10"
                            class="form-control">
                            {{ $viagem->sugestoes }} </textarea>
                    </div>
                    <div class="mt-2">
                        <label for="cidade_id" class="form-label"> Cidade </label>
                        <select name="cidade_id" id="cidade_id" class="form-control">
                            @if (isset($cidades))
                                @foreach ($cidades as $key => $cidade)
                                    <option value="{{ $cidade->id }}"
                                        @if ($cidade->id == $viagem->cidade_id) @selected(true) @endif>
                                        {{ $cidade->nome }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="m-2 my-4">
                        <button class="btn btn-success"> Edtar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
