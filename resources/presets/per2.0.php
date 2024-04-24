<?php

use App\Factories\ConfigurationFactory;

return ConfigurationFactory::preset([
    '@PER-CS2.0' => true,
    'no_unused_imports' => true,
]);
