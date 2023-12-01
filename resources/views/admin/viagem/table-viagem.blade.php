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
                            <a href="{{ route('viagem.view', ['id' => $viagem->id]) }}" class="btn btn-success">
                                <i class="bi bi-eye-fill"></i>
                                <span>visualizar</span>
                            </a>
                            @include('admin.viagem.modal-edit-viagem')
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endif
