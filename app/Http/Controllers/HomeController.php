<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ✅ Todos los productos en una propiedad privada
    private $products = [
        [
            'slug'  => 'ramo-de-rosas-rosadas',
            'image' => 'image/Rosas/Rosa1.jpg',    // ramo de rosas rosas claras
            'name'  => 'Ramo de Rosas Rosadas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
        ],
        [
            'slug'  => 'ramo-de-rosas-rojas-clasicas',
            'image' => 'image/Rosas/Rosa2.jpg',    // rosas rojas intensas en vaso de cristal
            'name'  => 'Ramo de Rosas Rojas Clásicas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
        ],
        [
            'slug'  => 'ramo-de-rosas-coral-en-jarron',
            'image' => 'image/Rosas/Rosa4.jpg',    // rosas color coral en jarra antigua
            'name'  => 'Ramo de Rosas Color Coral',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
        ],
        [
            'slug'  => 'ramo-mixto-de-rosas-blancas-y-rosadas',
            'image' => 'image/Rosas/Rosas3.jpg',   // mezcla de rosas blancas y rosadas en jarrón
            'name'  => 'Ramo Mixto de Rosas Blancas y Rosadas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
        ],
        [
            'slug'  => 'ramo-de-rosas-rosadas',
            'image' => 'image/Rosas/Rosa1.jpg',    // ramo de rosas rosas claras
            'name'  => 'Ramo de Rosas Rosadas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
        ],
        [
            'slug'  => 'ramo-de-rosas-rojas-clasicas',
            'image' => 'image/Tulipanes/Tuli1.jpg',    // rosas rojas intensas en vaso de cristal
            'name'  => 'Ramo de Rosas Rojas Clásicas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'tulipanes',
            'featured' => true,
        ],
    ];

    // Página principal con productos destacados
    public function index()
{
    $featured = collect($this->products)
                 ->where('featured', true)
                 ->values();

    return view('welcome', compact('featured'));
}


    // Página individual de cada producto
    public function showProduct($slug)
    {
        $product = collect($this->products)->firstWhere('slug', $slug);

        if (!$product) {
            abort(404);
        }

        return view('Producto.producto', compact('product'));
    }
    
    public function catalogo(Request $request)
{
    $categoria = strtolower($request->input('categoria',''));
    $busqueda  = strtolower($request->input('busqueda',''));

    $productos = collect($this->products)
        // si hay categoría, filtra exacto por campo category
        ->when($categoria, fn($col) =>
            $col->where('category', $categoria)
        )
        // si hay texto, filtra que el nombre lo contenga
        ->when($busqueda, fn($col) =>
            $col->filter(fn($p) =>
                str_contains(strtolower($p['name']), $busqueda)
            )
        )
        ->values();

    return view('catalogo.catalogo', [
        'productos'       => $productos,
        'categoriaActiva' => $categoria ?: 'Todos',
        'busquedaActual'  => $busqueda,
    ]);
}

}
