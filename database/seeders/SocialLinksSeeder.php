<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            'whatsapp'  => '',
            'telegram'  => '',
            'twitter'   => '',
            'facebook'  => '',
            'instagram' => '',
        ];

        foreach ($links as $platform => $url) {
            // Only insert if platform does not exist
            DB::table('social_links')->updateOrInsert(
                ['platform' => $platform], // condition
                [
                    'url' => $url,
                    'updated_at' => Carbon::now(),
                    'created_at' => DB::table('social_links')->where('platform', $platform)->exists()
                                    ? DB::table('social_links')->where('platform', $platform)->value('created_at')
                                    : null
                ]
            );
        }

    }
}
