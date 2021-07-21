<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tableName = 'apartments';
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table($tableName)->truncate();

        \Illuminate\Support\Facades\DB::table($tableName)->insert([
            [
                'id' => 1,
                'name' => 'Chung cư 1',
                'address' => 'Ha noi',
                'price' => 100000,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Chung cư 2',
                'address' => 'Ha noi',
                'price' => 144000,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Chung cư 3',
                'address' => 'Ha noi',
                'price' => 1445000,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Chung cư 4',
                'address' => 'Ha noi',
                'price' => 400230,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Chung cư 5',
                'address' => 'Ha noi',
                'price' => 3424525,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhawn.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Chung cư 6',
                'address' => 'Ha noi',
                'price' => 4215236,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Chung cư 7',
                'address' => 'Ha noi',
                'price' => 4124141,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Chung cư 8',
                'address' => 'Ha noi',
                'price' => 1245125,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Chung cư 9',
                'address' => 'Ha noi',
                'price' => 1241565,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Chung cư 10',
                'address' => 'Ha noi',
                'price' => 3262747,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 11,
                'name' => 'Chung cư 11',
                'address' => 'Ha noi',
                'price' => 4125125,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 12,
                'name' => 'Chung cư 12',
                'address' => 'Ha noi',
                'price' => 12452161,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 13,
                'name' => 'Chung cư 13',
                'address' => 'Ha noi',
                'price' => 5865955,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 14,
                'name' => 'Chung cư 14',
                'address' => 'Ha noi',
                'price' => 3526237,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 15,
                'name' => 'Chung cư 15',
                'address' => 'Ha noi',
                'price' => 531274383,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 16,
                'name' => 'Chung cư 16',
                'address' => 'Ha noi',
                'price' => 36322623,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 17,
                'name' => 'Chung cư 17',
                'address' => 'Ha noi',
                'price' => 6734734634,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 18,
                'name' => 'Chung cư 18',
                'address' => 'Ha noi',
                'price' => 647337,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 19,
                'name' => 'Chung cư 19',
                'address' => 'Ha noi',
                'price' => 536326,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ],
            [
                'id' => 20,
                'name' => 'Chung cư 20',
                'address' => 'Ha noi',
                'price' => 1353526,
                'general_information' => 'Nha to dep',
                'details' => 'Nha rat rong 50m2',
                'thumbnail' => 'https://moigioicanhan.com/wp-content/uploads/2020/01/can-ho-chung-cu-7-1024x576.jpg',
                'status' => 1,
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
