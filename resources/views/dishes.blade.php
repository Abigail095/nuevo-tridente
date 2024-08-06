<!DOCTYPE html>
<html>
<head>
    <title>Platos en {{ $category->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $category->name_categorie }}</h1>
        <ul>
            @forelse ($dishes as $dish)
                <li>
                    {{ $dish->dish_name }} - ${{ $dish->price }}
                </li>
            @empty
                <li>No hay platos disponibles en esta categoría.</li>
            @endforelse
        </ul>
        <a href="{{ route('index') }}" class="btn btn-secondary">Volver a Categorías</a>
    </div>
</body>
</html>
