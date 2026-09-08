<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CustomPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Terms and Conditions',
                'url_slug' => Str::slug('Terms and Conditions'),
                'body' => '<p>This is the Terms and Conditions page content.
                hese terms and conditions govern your use of our website and services. By accessing or using our site, you agree to comply with these terms.
                Welcome to our company! This is the About Us page content. We are passionate about delivering high-quality products and services that bring real value to our customers. Since our founding, we have focused on innovation, integrity, and excellence in everything we do. Our mission is to consistently exceed customer expectations and create long-term relationships built on trust and satisfaction.

                Over the years, we have grown into a trusted brand by prioritizing quality, reliability, and customer-centric solutions. Every decision we make, every product we develop, and every service we provide is driven by our commitment to excellence. We continuously invest in research and development to stay ahead of industry trends, ensuring that our offerings are both cutting-edge and relevant.

                Our team is composed of highly skilled professionals who share a common vision: to deliver exceptional experiences to our customers. We believe that success comes from collaboration, dedication, and a relentless pursuit of improvement. By fostering a culture of innovation and accountability, we empower our employees to bring their best ideas to life, resulting in products and services that truly make a difference.

                Customer satisfaction is at the heart of everything we do. We listen to our customers, understand their needs, and tailor our solutions to address their unique challenges. From personalized support to responsive service, we strive to create an environment where customers feel valued, respected, and confident in choosing our brand.

                In addition to our commitment to excellence, we take corporate social responsibility seriously. We actively participate in community initiatives, sustainable practices, and ethical business operations, reflecting our dedication to making a positive impact not only in our industry but also in the broader society.

                At our core, we believe in continuous growth and learning. We welcome feedback, embrace change, and adapt to the evolving market to ensure that we remain a leader in our field. By maintaining high standards and a forward-thinking approach, we aim to inspire confidence, loyalty, and satisfaction among our customers worldwide.

                Thank you for taking the time to learn more about us. We are excited to continue our journey, providing outstanding products and services while building lasting relationships based on trust, quality, and excellence. Together, we can achieve great things and make a meaningful difference in the lives of our customers and communities.</p>',
                'is_active' => 1,
                'order_id' => 2,
                'meta_title' => 'Terms and Conditions',
                'meta_keywords' => 'terms, conditions, rules',
                'meta_description' => 'Read our terms and conditions.',
                'update_by' => null,
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Privacy Policy',
                'url_slug' => Str::slug('Privacy Policy'),
                'body' => '<p>This is the Privacy Policy page content.
                We are committed to protecting your personal information and your right to privacy. This policy outlines how we collect, use, and safeguard your data.
                Welcome to our company! This is the About Us page content. We are passionate about delivering high-quality products and services that bring real value to our customers. Since our founding, we have focused on innovation, integrity, and excellence in everything we do. Our mission is to consistently exceed customer expectations and create long-term relationships built on trust and satisfaction.

                Over the years, we have grown into a trusted brand by prioritizing quality, reliability, and customer-centric solutions. Every decision we make, every product we develop, and every service we provide is driven by our commitment to excellence. We continuously invest in research and development to stay ahead of industry trends, ensuring that our offerings are both cutting-edge and relevant.

                Our team is composed of highly skilled professionals who share a common vision: to deliver exceptional experiences to our customers. We believe that success comes from collaboration, dedication, and a relentless pursuit of improvement. By fostering a culture of innovation and accountability, we empower our employees to bring their best ideas to life, resulting in products and services that truly make a difference.

                Customer satisfaction is at the heart of everything we do. We listen to our customers, understand their needs, and tailor our solutions to address their unique challenges. From personalized support to responsive service, we strive to create an environment where customers feel valued, respected, and confident in choosing our brand.

                In addition to our commitment to excellence, we take corporate social responsibility seriously. We actively participate in community initiatives, sustainable practices, and ethical business operations, reflecting our dedication to making a positive impact not only in our industry but also in the broader society.

                At our core, we believe in continuous growth and learning. We welcome feedback, embrace change, and adapt to the evolving market to ensure that we remain a leader in our field. By maintaining high standards and a forward-thinking approach, we aim to inspire confidence, loyalty, and satisfaction among our customers worldwide.

                Thank you for taking the time to learn more about us. We are excited to continue our journey, providing outstanding products and services while building lasting relationships based on trust, quality, and excellence. Together, we can achieve great things and make a meaningful difference in the lives of our customers and communities.</p>',
                'is_active' => 1,
                'order_id' => 3,
                'meta_title' => 'Privacy Policy',
                'meta_keywords' => 'privacy, policy, data',
                'meta_description' => 'Read our privacy policy.',
                'update_by' => null,
                'created_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('custom_pages')->insert($pages);
    }
}
