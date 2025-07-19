<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Aquí definimos los productos "destacados"
        $featured = [
            [
                'image' => 'img/Flor1.png',
                'name'  => 'Ramo de Rosas Rojas',
                'price' => '$30.00',
                'label' => 'Nuevo',
            ],
            [
                'image' => 'img/Flor2.jpg',
                'name'  => 'Ramo de Lirios Blancos',
                'price' => '$25.00',
                'label' => 'Más Vendido',
            ],
            [
                'image' => 'img/Flor3.jpg',
                'name'  => 'Planta Monstera',
                'price' => '$45.00',
                'label' => 'Exclusivo',
            ],
        ];

        // Le pasamos $featured a la vista 'welcome'
        return view('welcome', compact('featured'));
    }
}
