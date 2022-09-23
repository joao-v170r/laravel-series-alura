@if ($errors->any())
<div class="container">
    <ul class="list-group">
        @foreach ($errors->all() as $error)
            <li class="list-group-item bg-dark text-danger">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif