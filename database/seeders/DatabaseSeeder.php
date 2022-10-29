<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DefaultPermissionSeeder::class);
        $this->call(DefaultSeoToolSeeder::class);
        $this->call(DefaultSettingSeeder::class);
        $this->call(DefaultCurrencySeeder::class);
        $this->call(DefaultAdminSeeder::class);
        $this->call(DefaultRoleSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(CreateCountriesSeeder::class);
        $this->call(DefaultPaymentGatewaySeeder::class);
        $this->call(SmsGatewaysSeeder::class);
        $this->call(EmailTemplateSeeder::class);
        $this->call(SmsTemplateSeeder::class);
        $this->call(ReferralSeeder::class);
    }
}
