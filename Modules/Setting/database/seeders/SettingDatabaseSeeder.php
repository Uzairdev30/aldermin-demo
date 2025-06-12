<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Setting\Database\Seeders\SettingCountryTableSeeder;
use Modules\Setting\Database\Seeders\SettingLanguageTableSeeder;
use Modules\Setting\Database\Seeders\SettingTimezoneTableSeeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SettingTimezoneTableSeeder::class,
            SettingLanguageTableSeeder::class,
            SettingCountryTableSeeder::class,
        ]);
    }
}
