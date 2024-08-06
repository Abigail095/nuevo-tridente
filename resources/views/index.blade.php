<!DOCTYPE html>
<html>
<head>
    <title>Menú</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Categorías</h1>
        <form action="{{ route('categories.index') }}" method="POST">
            @csrf
            @foreach ($categories as $category)
                <button type="submit" name="category_id" value="{{ $category->id }}">
                    {{ $category->name_categorie}}
                </button>
            @endforeach
        </form>
    </div>
</body>
</html>
