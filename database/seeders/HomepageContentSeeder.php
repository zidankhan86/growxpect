<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageContentSeeder extends Seeder
{
     public function run(): void
    {
        $now = now();

        $fields = [

            // HERO
            ['section' => 'hero', 'field_key' => 'hero_title', 'field_value' => "When no one's watching…", 'field_type' => 'textarea'],
            ['section' => 'hero', 'field_key' => 'hero_subtitle', 'field_value' => "Who are you?", 'field_type' => 'textarea'],

            // SCREEN 2
            ['section' => 'screen2', 'field_key' => 'title', 'field_value' => "The moment didn't seem important.", 'field_type' => 'textarea'],
            ['section' => 'screen2', 'field_key' => 'subtitle', 'field_value' => "Until it stayed with you.", 'field_type' => 'textarea'],

            // VIDEO 1
            ['section' => 'video1', 'field_key' => 'video_url', 'field_value' => "https://www.youtube.com/embed/a17AUmx3CkA", 'field_type' => 'url'],

            // SCREEN 4 (Emotional Text)
            ['section' => 'screen4', 'field_key' => 'line1', 'field_value' => "Not the moments you talk about.", 'field_type' => 'textarea'],
            ['section' => 'screen4', 'field_key' => 'line2', 'field_value' => "The ones you still carry.", 'field_type' => 'textarea'],

            // VIDEO 2
            ['section' => 'video2', 'field_key' => 'video_url', 'field_value' => "https://www.youtube.com/embed/UjWCIwPONsc", 'field_type' => 'url'],

            // QUOTE
            ['section' => 'quote', 'field_key' => 'quote', 'field_value' => "Some decisions never leave your heart.", 'field_type' => 'textarea'],

            // CTA
            ['section' => 'cta', 'field_key' => 'cta_text', 'field_value' => "Tell us about the moment that never really left you.", 'field_type' => 'textarea'],

            // FINAL BUTTON
            ['section' => 'final_button', 'field_key' => 'button_text', 'field_value' => "Watch more reflections", 'field_type' => 'text'],

        ];

        foreach ($fields as &$row) {
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
        }

        DB::table('homepage_contents')->upsert(
            $fields,
            ['section', 'field_key'],
            ['field_value', 'field_type', 'updated_at']
        );

        $this->command->info('Homepage CMS seeded successfully!');
    }
}
