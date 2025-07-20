<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ✅ Todos los productos en una propiedad privada
    private $products = [
        [
            'slug'  => 'ramo-de-rosas-rojas',
            'image' => 'img/Flor1.png',
            'name'  => 'Ramo de Rosas Rojas',
            'price' => '$30.00',
            'label' => 'Nuevo',
        ],
        [
            'slug'  => 'ramo-de-lirios-blancos',
            'image' => 'img/Flor2.jpg',
            'name'  => 'Ramo de Lirios Blancos',
            'price' => '$25.00',
            'label' => 'Más Vendido',
        ],
        [
            'slug'  => 'planta-monstera',
            'image' => 'img/Flor3.jpg',
            'name'  => 'Planta Monstera',
            'price' => '$45.00',
            'label' => 'Exclusivo',
        ],
    ];

    // Página principal con productos destacados
    public function index()
    {
        return view('welcome', ['featured' => $this->products]);
    }

    // Página individual de cada producto
   public function showProduct($slug)
{
    $product = collect($this->products)->firstWhere('slug', $slug);

    if (!$product) {
        abort(404);
    }

    return view('producto', compact('product'));
}
}
