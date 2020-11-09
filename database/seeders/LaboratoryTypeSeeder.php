<?php

namespace Database\Seeders;

use App\Domain\LaboratoryTypes\Models\LaboratoryType;
use App\Services\TranslitService;
use Illuminate\Database\Seeder;

class LaboratoryTypeSeeder extends Seeder
{
    private $data = [
        'Анализ крови',
        'Микробиологический анализ',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        LaboratoryType::factory(10)->create();
        $index = 1;
        foreach ($this->data as $item) {
            \DB::table('laboratory_types')->insert([
                [
                    'id' => $index,
                    'slug' => strtolower(TranslitService::makeLatin($item)),
                    'type' => strtolower(TranslitService::makeLatin($item)),
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]
            ]);
            \DB::table('laboratory_type_translations')->insert([
                [
                    'laboratory_type_id' => $index,
                    'name' => $item,
                    'description' => $item,
                    'locale' => 'ru',
                ]
            ]);
            $index++;
        }
    }
}
