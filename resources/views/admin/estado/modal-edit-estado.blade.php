<!-- Button trigger modal -->
<button type="button" class="btn btn-success m-0" data-bs-toggle="modal" data-bs-target="#editarEstado">
    <i class="bi bi-pencil"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editarEstado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editarEstadoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarEstadoLabel"> Editar Estado </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="accordion accordion-flush" id="accordionEstados">
                    @foreach ($estados as $key => $estado)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAccordion{{ $key }}" aria-expanded="true"
                                    aria-controls="collapseAccordion{{ $key }}">
                                    {{ $estado->nome }}
                                </button>
                            </h2>

                            <div id="collapseAccordion{{ $key }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionEstados">
                                <div class="accordion-body">
                                    <form action="{{ route('estado.opcoes') }}" method="POST" enctype="multipart/form-data" class="mb-0">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="id" value="{{ $estado->id }}">

                                        <div class="mt-2">
                                            <label for="nome" class="form-label"> Nome </label>
                                            <input id="nome" name="nome" value="{{ $estado->nome }}"
                                                class="form-control" />
                                        </div>
                                        <div class="mt-2">
                                            <label for="descricao" class="form-label"> Descrição </label>
                                            <input id="descricao" name="descricao" value="{{ $estado->descricao }}"
                                                class="form-control" />
                                        </div>

                                        <div class="my-2 d-flex justify-content-between gap-2">
                                            <div>
                                                <label for="bandeira" class="form-label"> Bandeira </label>
                                                <input type="file" id="bandeira" name="img_bandeira"
                                                    class="form-control" />
                                                <input type="hidden" name="bandeira" value="{{ $estado->bandeira }}">
                                            </div>
                                            <div>
                                                <label for="pais" class="form-label"> Pais </label>
                                                <input type="text" id="pais" name="pais" class="form-control"
                                                    value="{{ $estado->pais }}" />
                                            </div>

                                        </div>

                                        <div class="m-2 mb-0 d-flex justify-content-end">       
                                            <button class="btn btn-success"> Editar </button>
                                        </div>
                                    </form>

                                    @include('admin.estado.form-delete-estado')
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

{{-- <form action="{{ route('Estado.action') }}" method="POST">
    @csrf

    <div class="mt-2">
        <label for="name" class="form-label"> Name </label>
        <input type="text" id="name" name="name" class="form-control" />
    </div>
    <div class="mt-2">
        <label for="description" class="form-label"> Descrição </label>
        <input type="text" id="description" name="description" class="form-control" />
    </div>
    <div class="my-2 d-flex justify-content-between gap-2">
        <div>
            <label for="bandeira" class="form-label"> Bandeira </label>
            <input type="file" id="bandeira" name="bandeira" class="form-control" />
        </div>
        <div>
            <label for="continente_id" class="form-label"> Continente </label>
            <select name="continente_id" id="continente_id" class="form-control">
                @if (isset($continentes))
                    @foreach ($continentes as $key => $continente)
                        <option value="{{ $continente->id }}"
                            @if ($key == 0) @selected(true) @endif>
                            {{ $continente->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    <div class="m-2 my-4">
        <button class="btn btn-success"> Enviar </button>
    </div>
</form> --}}
