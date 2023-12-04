<form action="{{ route('roteiro.opcoes') }}" method="post">
    @csrf
    @method('delete')

    <input type="hidden" name="id" value="{{ $roteiro->id }}">
    <input type="hidden" name="viagem_id" value="{{ $roteiro->viagem_id }}">

    <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja mesmo deletar este roteiro de viagem?')">
        <i class="bi bi-trash"></i>
    </button>
</form>
