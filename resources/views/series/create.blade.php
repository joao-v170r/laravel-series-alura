<x-layout titleWindows="adicione séries">
    <section class="container d-flex justify-content-md-center flex-column">
        <form action="{{ route('series.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
                <span class="input-group-text bg-dark text-white bg-opacity-50" id="">Nome da Série</span>
                <input type="text" id="nomeSerie" class="form-control" name="name" value="{{ old('name') }}">
            </div>            
            <x-form.validade :errors="$errors"/>
            <button type="submit" class="btn  btn-dark mt-1 float-end bg-opacity-50 ">Salvar</button>
        </form>        
        
    </section>
</x-layout>
