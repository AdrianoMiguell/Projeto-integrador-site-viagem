<form action="{{route('turismo.opcoes')}}" method="post">
    @csrf
    @method('delete')

    <input type="hidden" name="id" value="{{ $ponto->id }}">
    <input type="hidden" name="viagem_id" value="{{ $ponto->viagem_id }}">

    <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja mesmo deletar este item?')">
        <i class="bi bi-trash"></i>
    </button>

</form>
