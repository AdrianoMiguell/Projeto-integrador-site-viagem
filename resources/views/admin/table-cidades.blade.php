@if (isset($estados) && count($estados) > 0)
    <div id="sessao2" class="my-4 sessoes d-none">

        <div class="d-flex justify-content-end gap-3 m-2">
            <!-- Botão para acessar modal que cria novo registro de estado -->
            @include('admin.modal-create-estado')

            <!-- Botão para acessar modal que cria novo registro de cidade -->
            @include('admin.modal-create-cidade')
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bandeira</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                {{-- mudar nome de cidades para estados e cidades --}}
                @foreach ($cidades as $key => $cidade)
                    <tr>
                        <td>
                            @if (file_exists(public_path($cidade->estado->bandeira)))
                                <!-- Se a imagem existe, exiba-a -->
                                <img src="{{ $cidade->estado->bandeira }}" alt="{{ $cidade->estado->nome }}"
                                    width="75px" height="50px">
                            @else
                                <!-- Se a imagem não existe, exiba uma mensagem ou um placeholder -->
                                <img src="{{ asset('storage/' . $cidade->estado->bandeira) }}"
                                    alt="{{ $cidade->estado->nome }}" width="75px" height="50px">
                            @endif
                        </td>
                        <th scope="row">
                            {{ $cidade->nome }}
                        </th>
                        <td>
                            {{ $cidade->descricao }}
                        </td>
                        <td>
                            {{ $cidade->estado->nome }}
                            {{-- @include('admin.modal-edit-estado') --}}
                        </td>
                        <td>
                            @include('admin.modal-edit-cidade')
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endif
