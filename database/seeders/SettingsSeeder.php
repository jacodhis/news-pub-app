<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $settings = [
            'site_name' => 'Milestone Badge',
            'admin_email' => 'admin@gmail.com',
            'phone' => '0789875800',
        ];

        foreach ($settings as $key => $value) {
            DB::table('settings')->where('key', $key)->exists()
                ?: DB::table('settings')->insert([
                    'key' => $key,
                    'value' => $value,
                    'created_at' => null,
                    'updated_at' => Carbon::now(),
                ]);
        }
    }
}
