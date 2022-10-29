<?php

namespace Database\Seeders;

use App\Models\SeoTool;
use Illuminate\Database\Seeder;

class DefaultSeoToolSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seoTools =
            [
                'meta_keyword' => 'Infybetting',
                'meta_description' => 'Get Latest Bet',
                'social_title' => 'Infybetting',
                'social_description' => 'Get Latest Bet',
            ];
        SeoTool::create($seoTools);
    }
}
