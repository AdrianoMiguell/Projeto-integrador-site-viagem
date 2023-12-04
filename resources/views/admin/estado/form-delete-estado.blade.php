<form action="{{ route('estado.opcoes') }}" method="post">
    @csrf
    @method('DELETE')

    <input type="hidden" name="id" value="{{ $estado->id }}">

    <button type="submit" class="btn btn-danger d-inline-block" onclick="return confirm('Deseja mesmo deletar este Estado?')" style="translate: 18.5rem -2.4rem;">
        <i class="bi bi-trash"></i>
    </button>

</form>
