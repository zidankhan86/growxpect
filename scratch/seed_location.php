<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\CaseStudy;

$defaults = [
    'scaleguard-insurance-growth-funnel' => ['location' => 'United States', 'duration' => '6 Weeks Implementation'],
    'horizon-luxury-realty-buyer-funnel' => ['location' => 'Miami, FL, USA', 'duration' => '4 Weeks Execution'],
    'apex-aesthetics-medspa-patient-growth' => ['location' => 'Dallas, TX, USA', 'duration' => '8 Weeks Implementation'],
    'buildcraft-solar-residential-leads' => ['location' => 'Austin, TX, USA', 'duration' => '5 Weeks Execution'],
    'nexus-saas-advisory-b2b-pipeline' => ['location' => 'San Francisco, CA, USA', 'duration' => '12 Weeks Rollout'],
    'proclean-home-services-instant-booking' => ['location' => 'Chicago, IL, USA', 'duration' => '3 Weeks Launch'],
];

foreach ($defaults as $slug => $data) {
    CaseStudy::where('slug', $slug)->update($data);
}

CaseStudy::whereNull('location')->update([
    'location' => 'United States',
    'duration' => '4 Weeks Implementation',
]);

echo "Updated location and duration successfully.\n";
