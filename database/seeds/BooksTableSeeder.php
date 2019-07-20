<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range(0,10) as $index){
            DB::table('books')->insert([
                'user_id' => $index+1,
                'nama_buku' => $faker->text($maxNbChars = 190),
                'pengarang' => $faker->text($maxNbChars = 190),
                'penerbit' =>0,
                'jenis' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'penyunting' =>0,
                'penerjemah' =>0,
                'abstrak' =>0,
                'kota_penerbit' =>0,
                'tahun_terbit' =>0,
            ]);
        }
    }
}
