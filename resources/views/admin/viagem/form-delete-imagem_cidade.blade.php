<form action="{{ route('imagem_cidade.opcoes') }}" method="post">
    @csrf
    @method('delete')

    <input type="hidden" name="id" value="{{ $imagem_cidade->id }}">
    <input type="hidden" name="viagem_id" value="{{ $imagem_cidade->viagem_id }}">

    <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja mesmo deletar esta imagem?')">
        <i class="bi bi-trash"></i> Deletar
    </button>

</form>
