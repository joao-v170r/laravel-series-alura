<x-layout title="adicione séries">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text bg-dark text-white bg-opacity-50" id="">Nome da Série</span>
            <input type="text" id="nomeSerie" class="form-control" name="name">
        </div>
        <button type="submit" class="btn  btn-dark mt-1 float-end bg-opacity-50 ">Salvar</button>
    </form>
</x-layout>
