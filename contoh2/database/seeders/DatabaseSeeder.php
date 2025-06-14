<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\User;
use App\Models\Menu_category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'id' => 1,
            'nama' => 'Raie Aswajjillah',
            'email' => 'rai010303@gmail.com',
            'password' => Hash::make('123123'),
            'is_admin' => 1
        ]);
        User::create([
            'id' => 2,
            'nama' => 'Yoan Nurazizah',
            'email' => 'yoan332@gmail.com',
            'password' => Hash::make('123123'),
            'is_admin' => 1
        ]);
        User::create([
            'id' => 3,
            'nama' => 'Elsa Islamiyanti',
            'email' => 'Elsa123@gmail.com',
            'password' => Hash::make('123123'),
            'is_admin' => 1
        ]);

        Menu::create([
            'menu_category_id' => 1, // category : sate
            'nama_menu' => 'Sate Ayam',
            'slug' => 'sate-ayam',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Sate Ayam adalah hidangan yang terbuat dari potongan daging ayam yang ditusuk dengan bambu, kemudian dipanggang hingga matang sempurna. Daging ayam yang lembut dan bumbu rempah yang khas memberikan cita rasa yang gurih dan pedas. Sate Ayam sering disajikan dengan bumbu kacang yang kental dan sedikit pedas, serta dilengkapi dengan irisan bawang merah dan timun segar sebagai pelengkap.',
            'harga' => '28'
        ]);
        Menu::create([
            'menu_category_id' => 1,
            'nama_menu' => 'Sate Kambing',
            'slug' => 'sate-kambing',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Sate Kambing adalah hidangan tradisional yang terdiri dari potongan daging kambing yang ditusuk menggunakan bambu dan dipanggang hingga berwarna kecokelatan. Daging kambing yang memiliki tekstur lembut dan cita rasa khas memberikan sensasi kenikmatan tersendiri. Sate Kambing biasanya disajikan dengan bumbu kacang yang kental dan pedas, serta ditemani dengan nasi putih hangat dan acar segar.',
            'harga' => '30'
        ]);
        Menu::create([
            'menu_category_id' => 1,
            'nama_menu' => 'Sate Sapi',
            'slug' => 'sate-sapi',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Sate Sapi adalah hidangan yang terbuat dari potongan daging sapi yang ditusuk dengan bambu, kemudian dipanggang hingga matang dengan sempurna. Daging sapi yang empuk dan bumbu rempah yang meresap memberikan cita rasa yang kaya dan lezat. Sate Sapi biasanya disajikan dengan bumbu kacang yang gurih dan sedikit pedas, serta dilengkapi dengan irisan bawang merah dan timun segar untuk memberikan kesegaran.',
            'harga' => '34'
        ]);
        Menu::create([
            'menu_category_id' => 2, // category : jajanan ringan
            'nama_menu' => 'Batagor',
            'slug' => 'batagor',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Batagor adalah hidangan yang terdiri dari bakso tahu goreng yang disajikan dengan saus kacang pedas dan kecap manis. Bakso tahu yang kenyal dan renyah di luar, dengan isian ikan atau daging yang lezat, memberikan pengalaman rasa yang unik dan memuaskan. Batagor sering disajikan dengan irisan ketimun, tauge, dan bawang goreng yang menambah kelezatan hidangan ini',
            'harga' => '12'
        ]);
        Menu::create([
            'menu_category_id' => 2,
            'nama_menu' => 'Rujak Buah',
            'slug' => 'rujak-buah',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Rujak Buah adalah hidangan yang terdiri dari campuran beragam buah segar yang diiris dan disajikan dengan saus rujak yang manis, asam, dan pedas. Rujak Buah memberikan kombinasi rasa yang unik antara manis, asam, dan pedas, serta tekstur yang segar dan renyah. Hidangan ini sering disajikan dengan taburan kacang tanah, kerupuk, dan serutan kelapa untuk memberikan cita rasa dan tekstur yang lebih beragam.',
            'harga' => '10'
        ]);
        Menu::create([
            'menu_category_id' => 2,
            'nama_menu' => 'Basreng Balado',
            'slug' => 'basreng-balado',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Basreng Balado adalah hidangan yang terdiri dari kerupuk bawang yang digoreng hingga renyah dan kemudian dilumuri dengan bumbu balado yang pedas. Basreng Balado memiliki rasa yang gurih, pedas, dan renyah, sehingga cocok sebagai camilan atau pendamping hidangan lainnya. Hidangan ini sering disajikan dalam keadaan crispy dan dapat dinikmati dalam berbagai kesempatan.',
            'harga' => '12'
        ]);
        Menu::create([
            'menu_category_id' => 3, // category = minuman
            'nama_menu' => 'Es Teh Tawar',
            'slug' => 'es-teh-tawar',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Es Teh Tawar adalah minuman yang terdiri dari teh hitam atau teh hijau yang diseduh dan didinginkan dengan es batu. Rasanya yang segar dan tawar menjadikan minuman ini pilihan yang populer untuk menghilangkan dahaga dan menyejukkan tenggorokan. Es Teh Tawar biasanya disajikan dengan irisan lemon atau jeruk nipis untuk memberikan aroma segar.',
            'harga' => '4'
        ]);
        Menu::create([
            'menu_category_id' => 3,
            'nama_menu' => 'Air Putih',
            'slug' => 'air-putih',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Air Putih adalah minuman yang paling sederhana dan alami, terdiri dari air tanpa tambahan apapun. Air putih tidak memiliki rasa atau aroma khusus, tetapi memberikan manfaat penting bagi tubuh dalam menjaga kecukupan hidrasi dan menghilangkan dahaga.',
            'harga' => '2'
        ]);
        Menu::create([
            'menu_category_id' => 3,
            'nama_menu' => 'Jus Jeruk',
            'slug' => 'jus-jerukeruk',
            'gambar' => 'assets/img/default.jpg',
            'deskripsi_menu' => 'Jus Jeruk adalah minuman segar yang terbuat dari perasan buah jeruk segar yang kaya akan vitamin C. Rasanya yang manis asam dan segar sangat menggugah selera, serta memberikan banyak nutrisi yang baik untuk kesehatan. Jus Jeruk dapat dinikmati dingin atau dengan tambahan es batu untuk sensasi kesegaran yang lebih terasa.',
            'harga' => '6'
        ]);


        Menu_category::create([
            'nama_category' => 'Sate',
            'slug' => 'sate-category'
        ]);
        Menu_category::create([
            'nama_category' => 'Jajanan Ringan',
            'slug' => 'jajanan-ringan'
        ]);
        Menu_category::create([
            'nama_category' => 'Minuman',
            'slug' => 'minuman-category'
        ]);
    }
}