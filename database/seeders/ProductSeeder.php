<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'M4A1 Tactical Carbine', 'description' => 'Cuerpo de polímero reforzado, gearbox V2 metálico. Ideal para empezar.', 'price' => 149.90, 'image' => 'm4a1.jpg'],
            ['name' => 'AK-47 Spetsnaz', 'description' => 'Diseño compacto para CQB, acabados en madera sintética y metal.', 'price' => 135.00, 'image' => 'ak47.jpg'],
            ['name' => 'G36C Pro Series', 'description' => 'Alta cadencia de tiro, culata plegable y raíles Picatinny.', 'price' => 189.50, 'image' => 'g36c.jpg'],
            ['name' => 'Glock 17 Gen4 Gas', 'description' => 'Retroceso realista (Blowback), corredera metálica y hop-up ajustable.', 'price' => 120.00, 'image' => 'glock.jpg'],
            ['name' => 'Hi-Capa 5.1 Custom', 'description' => 'La favorita para recorridos de tiro. Gran capacidad de gas.', 'price' => 145.90, 'image' => 'hicapa.jpg'],
            ['name' => '1911 Clásica CO2', 'description' => 'Potencia constante incluso en invierno gracias a sus cápsulas de CO2.', 'price' => 99.00, 'image' => '1911.jpg'],
            ['name' => 'Chaleco Táctico JPC', 'description' => 'Ligero, transpirable e incluye pouches integrados para 3 cargadores.', 'price' => 65.00, 'image' => 'chaleco.jpg'],
            ['name' => 'Casco FAST', 'description' => 'Protección contra impactos con montura NVG y velcros para parches.', 'price' => 45.50, 'image' => 'casco.jpg'],
            ['name' => 'Gafas Balísticas X800', 'description' => 'Homologadas STANAG. Sistema antivaho avanzado y cristal transparente.', 'price' => 32.90, 'image' => 'gafas.jpg'],
            ['name' => 'Bolas BIO 0.25g', 'description' => 'Paquete de 4000 BBs biodegradables de alta precisión.', 'price' => 15.50, 'image' => 'fondo.jpg'], // Usamos imágenes repetidas para rellenar
            ['name' => 'Gas Verde 1000ml', 'description' => 'Gas con silicona para un mejor mantenimiento de las juntas de tu réplica.', 'price' => 12.00, 'image' => 'fondo.jpg'],
            ['name' => 'Correa de 1 punto', 'description' => 'Correa táctica elástica para transición rápida de arma.', 'price' => 18.00, 'image' => 'fondo.jpg'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}