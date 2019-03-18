<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Apprentie développeur',
            'contact_email' => 'info@apprentie-developpeur.com'
        ]);
    }
}
