<?php namespace Backend\Database\Seeds;

use Seeder;
use Am\Variables\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $setting = Setting::create([
            'base_url_link' => 'http://example.com',
        ]);
    }
}