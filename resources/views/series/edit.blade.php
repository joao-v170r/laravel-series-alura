<x-layout titleWindows="editar série">
    <section class="container d-flex justify-content-md-center flex-column">
        <div>
            <form action="{{ route('series.update', $serie->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <span class="input-group-text bg-dark text-white bg-opacity-50" id="">Nome da Série</span>
                    <input type="text" id="nomeSerie" class="form-control" name="name" value="{{ $serie->name }}">
                </div>
                <button type="submit" class="btn  btn-dark mt-1 float-end bg-opacity-50 ">Salvar</button>
            </form>
        </div>
       <x-form.validade :errors="$errors"/>
    </section>
</x-layout>