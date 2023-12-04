@if (!isset($viagens) || count($viagens) == 0)
    <span class="d-block text-center my-2 mt-4">Nenhum roteiro de viagem cadastrado.</span>
@else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>

            {{-- mudar nome de viagens para estados e viagens --}}

            @foreach ($viagens as $key => $viagem)
                <tr>
                    <th scope="row">
                        {{ $viagem->titulo }}
                    </th>
                    <td>
                        {{ $viagem->cidade->nome }}
                    </td>
                    <td>
                        {{ $viagem->cidade->estado->nome }}
                    </td>
                    <td>
                        <div class="d-flex gap-2 flex-wrap">
                            @include('admin.viagem.form-delete-viagem')
                            @include('admin.viagem.modal-edit-viagem')
                            <a href="{{ route('viagem.view', ['id' => $viagem->id]) }}" class="btn btn-primary">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endif
