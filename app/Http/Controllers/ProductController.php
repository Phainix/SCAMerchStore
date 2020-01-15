<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public array $products = [
        ['name' => 'Crew neck t-shirt', 'price' => 50, 'variation' => ['men', 'women'], 'color' => ['white', 'black']],
        ['name' => 'Sweat shirt', 'price' =>150, 'variation' => ['men', 'women'], 'color' => ['grey', 'black']],
        ['name' => 'Hoodie', 'price' => 200, 'variation' => ['men', 'women'], 'color' => ['while', 'pink']],
        ['name' => 'Mug', 'price' => 20, 'variation' => [], 'color' => ['white', 'black']],
        ['name' => 'Cap', 'price' => 40, 'variation' => [], 'color' => ['white', 'black']],
        ['name' => 'Swing t-shirt', 'price' => 50, 'variation' => ['women'], 'color' => ['white', 'black']],
        ['name' => 'Tank top', 'price' => 45, 'variation' => ['men', 'women'], 'color' => ['pink', 'black']],
        ['name' => 'Sticker pack', 'price' => 50, 'variation' => [], 'color' => []],
        ['name' => 'Pop socket', 'price' => 10, 'variation' => [], 'color' => ['white', 'black', 'pink']],
        ['name' => 'Pin', 'price' => 15, 'variation' => [], 'color' => ['white', 'pink']],
    ];

    //
    public function list() {
        // return $this->products;
        return response()->json($this->products);
    }

    public function getProduct($id) {
        $response = [];
        if(array_key_exists($id, $this->products)):
            $response = $this->products[$id];
        endif;
        return response()->json($response);
    }
}
