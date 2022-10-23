<x-layout titleWindows="Temporadas {!! $serie->nome !!}">
    <section class="container d-flex justify-content-md-center flex-column">
        <div>
            <ul class="list-group">
                @foreach ($temporadas as $temporada)
                    <li class="list-group-item d-flex justify-content-between align-items-start  bg-dark bg-opacity-50">
                        <div class="">
                            <label class="form-check-label text-white stretched-link" id="label-{{ $temporada->id }}" for="temporada{{  $temporada->id }}">Temporadas: {{ $temporada->numero }}</label>
                        </div>
                        <div class="">
                            <label class="form-check-label text-white stretched-link" >Episodios: {{ $temporada->episodios->count() }}</label>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</x-layout>