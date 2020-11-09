<?php

namespace Database\Seeders;

use App\Domain\Specialities\Models\Speciality;
use App\Services\TranslitService;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    private $data = [
        'Терапевт',
        'Педиатр',
        'Хирург',
        'Дантист',
        'Медсестра',
        'Андролог',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Speciality::factory(10)->create();
        $index = 1;
        foreach ($this->data as $item) {
            \DB::table('specialities')->insert([
                [
                    'id' => $index,
                    'slug' => strtolower(TranslitService::makeLatin($item)),
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]
            ]);
            \DB::table('speciality_translations')->insert([
                [
                    'speciality_id' => $index,
                    'name' => $item,
                    'description' => $item,
                    'locale' => 'ru',
                ]
            ]);
            $index++;
        }
    }
}
