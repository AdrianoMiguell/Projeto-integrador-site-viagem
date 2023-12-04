<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal"
    data-bs-target="#editarCidade{{ isset($key) ? $key : '' }}">
    <i class="bi bi-pencil-fill"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editarCidade{{ isset($key) ? $key : '' }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="editarCidade{{ isset($key) ? $key : '' }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarCidade{{ isset($key) ? $key : '' }}Label"> Editar Cidade </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('cidade.opcoes') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mt-2">
                        <label for="nome" class="form-label"> Nome </label>
                        <input id="nome" name="nome" value="{{ $cidade->nome }}" class="form-control" />
                    </div>
                    <div class="mt-2">
                        <label for="descricao" class="form-label"> Descricão </label>
                        <input id="descricao" name="descricao" value="{{ $cidade->descricao }}" class="form-control" />
                    </div>

                    <input type="hidden" name="id" value="{{ $cidade->id }}">

                    <div>
                        <label for="estado_id" class="form-label"> Estado </label>
                        <select name="estado_id" id="estado_id" class="form-control">
                            @if (isset($estados))
                                @foreach ($estados as $key => $estado)
                                    <option value="{{ $estado->id }}"
                                        @if ($estado->id == $cidade->estado_id) @selected(true) @endif>
                                        {{ $estado->nome }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="m-2 d-flex justify-content-between">
                        {{-- @include('admin.cidade.form-delete-cidade') --}}
                        <button class="btn btn-success"> Editar </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
