<?php
require_once __DIR__ . '/vendor/autoload.php';

Sentry\init([
    'dsn' => 'https://e3e6bb0191a0fd10d20e831e7d1b671a@o4509441540423680.ingest.de.sentry.io/4509441543176272',
    'environment' => 'production',
    'release' => 'e-recruitment@1.0.0',
]);
