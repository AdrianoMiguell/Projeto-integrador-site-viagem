<form action="{{ route('cidade.opcoes') }}" method="post">
    @csrf
    @method('DELETE')

    <input type="hidden" name="id" value="{{ $cidade->id }}">

    <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja mesmo deletar esta Cidade: {{$cidade->nome}} ?')">
        <i class="bi bi-trash"></i>
    </button>

</form>
