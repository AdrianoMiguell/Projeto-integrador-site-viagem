<form action="{{ route('viagem.opcoes') }}" method="post">
    @csrf
    @method('DELETE')

    <input type="hidden" name="id" value="{{ $viagem->id }}">

    <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja mesmo deletar este roteiro de viagem?')">
        <i class="bi bi-trash"></i>
    </button>

</form>
