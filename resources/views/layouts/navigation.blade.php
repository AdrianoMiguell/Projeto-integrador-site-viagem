<nav class="navbar navbar-expand-lg px-5 ">
    <div class="container-fluid">
        @if (Auth::user()->email == 'admin@gmail.com')
            <a class="navbar-brand" href="/workspaceadmin">NÔMASHE</a>
        @else
            <a class="navbar-brand" href="/">NÔMASHE</a>
        @endif


        <ul class="navbar-nav flex-row gap-5 justify-content-end align-items-center flex-grow-1 px-4">
            @if (Auth::user()->email == 'admin@gmail.com')
                <li class="nav-item nav-item-search">
                    <form class="d-flex" role="search" action="{{ route('workspaceadmin.search') }}">

                        <input class="form-control text-dark mx-1" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </li>
            @else
                @if (isset($viagens) && count($viagens) > 0)
                    @foreach ($estados as $key => $estado)
                        @if ($key < 10)
                            <li class="nav-item dropdown position-relative">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $estado->nome }}
                                </a>
                                <ul class="dropdown-menu position-absolute">
                                    @foreach ($cidades as $cidade)
                                        @if ($cidade->estado_id === $estado->id)
                                            <li><a href="{{ route('view.user.viagem', ['cidade_id' => $cidade->id]) }}"
                                                    class="dropdown-item" href="#">
                                                    {{ $cidade->nome }}
                                                </a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
                @else
                    <li class="nav-item">
                        <a href="#" class="nav-link"><span>Roteiros de Viagens</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><span>Sobre nós</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><span>Contato</span></a>
                    </li>
                @endif

                <li class="nav-item nav-item-dropdown">
                    <button class="offcanvas-viagens nav-link" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasViagensOpcoes" aria-controls="offcanvasViagensOpcoes">
                        Outros Estados
                    </button>
                </li>
                <li class="nav-item nav-item-search">
                    <form class="d-flex" role="search" action="{{ route('search.viagem') }}">

                        <input class="form-control text-dark mx-1" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </li>

            @endif
        </ul>
    </div>

</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasViagensOpcoes"
    aria-labelledby="offcanvasViagensOpcoesLabel" style="--bs-offcanvas-width: 300px;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasViagensOpcoesLabel">Roteiros de Viagens</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small">
        @if (isset($viagens) && count($viagens) > 0)

            <div class="accordion" style="--bs-accordion-border-color: transparent" id="accordionExample">

                @foreach ($estados as $key => $estado)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $key }}" aria-expanded="false"
                                aria-controls="collapse{{ $key }}">
                                {{ $estado->nome }}
                            </button>
                        </h2>

                        @foreach ($cidades as $cidade)
                            @if ($cidade->estado_id === $estado->id)
                                <div id="collapse{{ $key }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <a href="{{ route('view.user.viagem', ['cidade_id' => $cidade->id]) }}"
                                            class="dropdown-item">
                                            {{ $cidade->nome }}
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        @else
            <ul>
                <li class="nav-item">
                    <a href="#"><span>Roteiros de Viagens</span></a>
                </li>
                <li class="nav-item">
                    <a href="#"><span>Sobre nós</span></a>
                </li>
                <li class="nav-item">
                    <a href="#"><span>Contato</span></a>
                </li>
            </ul>
        @endif
    </div>
</div>
