<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\CaseStudy;

$cases = CaseStudy::all();
foreach ($cases as $c) {
    if (trim($c->metric_2_val) === '.2M' || str_contains($c->metric_2_val, '.2M')) {
        $c->metric_2_val = '$1.2M';
        $c->save();
    }
}
echo "Cleaned up metric values successfully.\n";
