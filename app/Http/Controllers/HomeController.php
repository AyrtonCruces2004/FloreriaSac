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
            'description' => 'Un hermoso ramo de rosas rosadas frescas en jarrón de cerámica blanca.',
            'colors'      => [
            '#000000', // negro
            '#FFFFFF', // blanco
            '#C0C0C0', // gris claro
            '#F5E1E0', // rosa pálido
        ],
        'gallery'     => [
            'image/Rosas/Rosa1.jpg',
            'image/Rosas/Rosa2.jpg',
            'image/Rosas/Rosas3.jpg',
        ],
        ],
        [
            'slug'  => 'ramo-de-rosas-rojas-clasicas',
            'image' => 'image/Rosas/Rosa2.jpg',    // rosas rojas intensas en vaso de cristal
            'name'  => 'Ramo de Rosas Rojas Clásicas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
            'description' => 'Un hermoso ramo de rosas rosadas frescas en jarrón de cerámica blanca.',
            'colors'      => [
            '#000000', // negro
            '#FFFFFF', // blanco
            '#C0C0C0', // gris claro
            '#F5E1E0', // rosa pálido
        ],
        'gallery'     => [
            'image/Rosas/Rosa1.jpg',
            'image/Rosas/Rosa2.jpg',
            'image/Rosas/Rosas3.jpg',
        ],
        ],
        [
            'slug'  => 'ramo-de-rosas-coral-en-jarron',
            'image' => 'image/Rosas/Rosa4.jpg',    // rosas color coral en jarra antigua
            'name'  => 'Ramo de Rosas Color Coral',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
            'description' => 'Un hermoso ramo de rosas rosadas frescas en jarrón de cerámica blanca.',
            'colors'      => [
            '#000000', // negro
            '#FFFFFF', // blanco
            '#C0C0C0', // gris claro
            '#F5E1E0', // rosa pálido
        ],
        'gallery'     => [
            'image/Rosas/Rosa1.jpg',
            'image/Rosas/Rosa2.jpg',
            'image/Rosas/Rosas3.jpg',
        ],
        ],
        [
            'slug'  => 'ramo-mixto-de-rosas-blancas-y-rosadas',
            'image' => 'image/Rosas/Rosas3.jpg',   // mezcla de rosas blancas y rosadas en jarrón
            'name'  => 'Ramo Mixto de Rosas Blancas y Rosadas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
            'description' => 'Un hermoso ramo de rosas rosadas frescas en jarrón de cerámica blanca.',
            'colors'      => [
            '#000000', // negro
            '#FFFFFF', // blanco
            '#C0C0C0', // gris claro
            '#F5E1E0', // rosa pálido
        ],
        'gallery'     => [
            'image/Rosas/Rosa1.jpg',
            'image/Rosas/Rosa2.jpg',
            'image/Rosas/Rosas3.jpg',
        ],
        ],
        [
            'slug'  => 'ramo-de-rosas-rosadas',
            'image' => 'image/Rosas/Rosa1.jpg',    // ramo de rosas rosas claras
            'name'  => 'Ramo de Rosas Rosadas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'rosas',
            'featured' => true,
            'description' => 'Un hermoso ramo de rosas rosadas frescas en jarrón de cerámica blanca.',
            'colors'      => [
            '#000000', // negro
            '#FFFFFF', // blanco
            '#C0C0C0', // gris claro
            '#F5E1E0', // rosa pálido
        ],
        'gallery'     => [
            'image/Rosas/Rosa1.jpg',
            'image/Rosas/Rosa2.jpg',
            'image/Rosas/Rosas3.jpg',
        ],
        ],
        [
            'slug'  => 'ramo-de-rosas-rojas-clasicas',
            'image' => 'image/Tulipanes/Tuli1.jpg',    // rosas rojas intensas en vaso de cristal
            'name'  => 'Ramo de tulipanes Rojas Clásicas',
            'price' => '30.00',
            'label' => 'Nuevo',
            'category' => 'tulipanes',
            'featured' => true,
            'description' => 'Un hermoso ramo de rosas rosadas frescas en jarrón de cerámica blanca.',
            'colors'      => [
            '#000000', // negro
            '#FFFFFF', // blanco
            '#C0C0C0', // gris claro
            '#F5E1E0', // rosa pálido
        ],
        'gallery'     => [
            'image/Rosas/Rosa1.jpg',
            'image/Rosas/Rosa2.jpg',
            'image/Rosas/Rosas3.jpg',
        ],
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
    public function catalogo(Request $request)
    {
        $categoria = strtolower($request->input('categoria', ''));
        $busqueda  = strtolower($request->input('busqueda', ''));

        $productos = collect($this->products)
            // si hay categoría, filtra exacto por campo category
            ->when(
                $categoria,
                fn($col) =>
                $col->where('category', $categoria)
            )
            // si hay texto, filtra que el nombre lo contenga
            ->when(
                $busqueda,
                fn($col) =>
                $col->filter(
                    fn($p) =>
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
    public function showProduct($slug)
    {
        $product = collect($this->products)->firstWhere('slug', $slug);
        if (! $product) {
            abort(404);
        }

        // Galería: si no tienes array, usa la imagen principal
        $gallery = $product['gallery'] ?? [$product['image']];

        // Productos similares
        $related = collect($this->products)
            ->where('category', $product['category'])
            ->where('slug', '!=', $slug)
            ->take(3)
            ->all();

        return view('Producto.producto', [
            'product' => array_merge($product, ['gallery' => $gallery]),
            'related' => $related,
        ]);
    }
    public function showCart()
    {
        $cart = session('cart', []); // ['slug' => cantidad, …]
        $items = collect($cart)->map(function($qty, $slug) {
            $prod = collect($this->products)->firstWhere('slug', $slug);
            if (!$prod) return null;
            return array_merge($prod, ['quantity' => $qty]);
        })->filter()->all();

        return view('carrito.carrito', ['items' => $items]);

    }

    // Añadir al carrito
    public function addToCart($slug)
    {
        $cart = session('cart', []);
        $cart[$slug] = ($cart[$slug] ?? 0) + 1;
        session(['cart' => $cart]);
        return redirect()->back();
    }

    // Eliminar del carrito
    public function removeFromCart($slug)
    {
        $cart = session('cart', []);
        unset($cart[$slug]);
        session(['cart' => $cart]);
        return redirect()->route('cart.show');
    }

    // Actualizar cantidad
    public function updateCart(Request $req, $slug)
    {
        $qty = max(1, (int)$req->input('quantity', 1));
        $cart = session('cart', []);
        if (isset($cart[$slug])) {
            $cart[$slug] = $qty;
            session(['cart' => $cart]);
        }
        return redirect()->route('cart.show');
    }
    public function contacto()
{
    // 1) Saca el carrito de la sesión
    $cart = session('cart', []); // ['slug' => qty, ...]

    // 2) Transforma cada slug en el producto completo + qty
    $items = collect($cart)
        ->map(function($qty, $slug) {
            $prod = collect($this->products)->firstWhere('slug', $slug);
            return $prod
                ? array_merge($prod, ['quantity' => $qty])
                : null;
        })
        ->filter()
        ->all();

    // 3) Devuelve la vista pasándole $items
    return view('contacto.contacto', compact('items'));
}
}
