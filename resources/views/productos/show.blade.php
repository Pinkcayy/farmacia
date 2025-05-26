<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $producto->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <a href="{{ route('productos.index') }}" class="btn btn-secondary mb-4">← Volver a la lista</a>

        <div class="card mb-3 shadow">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $producto->imagen) }}" class="img-fluid rounded-start" alt="{{ $producto->nombre }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{ $producto->nombre }}</h2>
                        <p class="card-text"><strong>Marca:</strong> {{ $producto->marca }}</p>
                        <p class="card-text"><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                        <p class="card-text"><strong>Categoría:</strong> {{ $producto->categoria }}</p>
                        <p class="card-text"><strong>Precio:</strong> Bs {{ number_format($producto->precio, 2, ',', '.') }}</p>
                        <p class="card-text"><strong>Stock:</strong> {{ $producto->stock }} unidades</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>