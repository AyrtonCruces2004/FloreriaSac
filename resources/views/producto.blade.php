<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>{{ $product['name'] }}</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-4xl mx-auto p-8">
    <h1 class="text-3xl font-bold mb-4">{{ $product['name'] }}</h1>
    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="w-full max-w-md mx-auto rounded shadow">
    <p class="text-xl mt-6">Precio: {{ $product['price'] }}</p>
    <p class="text-sm text-gray-500 mt-2">Etiqueta: {{ $product['label'] }}</p>

    <a href="{{ url('/') }}" class="mt-8 inline-block text-blue-600 hover:underline">← Volver al inicio</a>
  </div>
</body>
</html>
