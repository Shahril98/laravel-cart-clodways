<?php

namespace Database\Seeders;
// use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products') ->insert(
            [
                'name' => 'Apple macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD',
                'descriptions' => 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beast.',
                'brand' => 'Apple',
                'price' => 2499,
                'shippingcost' => 50,
                'image_path' => 'storage/product.png',
            ]
        );
        DB::table('products') -> insert(
            [
                'name' => 'Galaxy Book2 Pro 360',
                'details' => '15 Inch, Intel® Core™ i7, 1TB, Silver',
                'descriptions' => 'Push the boundaries of whats possible with a computing experience unlike any other — Galaxy Book2 Pro 360 is powered by our most powerful processor available. Translation: Super-quick response times. Jaw-dropping graphics. Extraordinary multitasking capabilities. Lightning-fast download speed. All powered by the latest 12th Gen Evo-certified CPU that makes every task a truly rewarding experience',
                'brand' => 'Samsung',
                'price' => 1549,
                'shippingcost' => 45,
                'image_path' => 'storage/product2.png',
            ]
        );
    }
}
