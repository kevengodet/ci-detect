<?php

$vendorsUri = 'https://raw.githubusercontent.com/watson/ci-info/refs/heads/master/vendors.json';

echo "\nDownload \033[1;37m$vendorsUri\033[0m\n";
$freshData = json_decode(file_get_contents($vendorsUri), true, 512, JSON_THROW_ON_ERROR);
usort($freshData, fn ($a, $b) => $a['name'] <=> $b['name']);

$currentData = [];
if (file_exists($dataPath = dirname(__DIR__).'/data/vendors.php')) {
    $currentData = require_once $dataPath;
}
usort($currentData, fn ($a, $b) => $a['name'] <=> $b['name']);

if (serialize($freshData) === serialize($currentData)) {
    echo "No change - Local file is already up to date.\n";

    exit;
}

echo "Update data at \033[1;37m$dataPath\033[0m.\n";

file_put_contents($dataPath, '<?php'."\nreturn ".var_export($freshData, true).";\n");
