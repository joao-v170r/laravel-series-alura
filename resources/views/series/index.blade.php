<x-layout title="list séries">
    <div class="">
        <ul class="list-group">
            @foreach ($series as $key => $serie)
            <li class="list-group-item bg-dark bg-opacity-50" style="min-width: 50rem;">
                <input class="form-check-input me-1" type="checkbox" value="" id="series{{ $key }}">
                <label class="form-check-label text-white stretched-link" for="series{{ $key }}">{{ $serie }}</label>
            </li>
            @endforeach
        </ul>
        <a href="/series/criar" class="btn btn-dark mt-1 float-end bg-opacity-50" type="button">Nova Série</a>
    </div>
</x-layout>
