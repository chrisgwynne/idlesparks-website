<?php
// webhook.php — GitHub webhook endpoint for auto-deploy

$secret = getenv('GITHUB_WEBHOOK_SECRET') ?: 'change-me-in-cpanel';
$deploy_script = '/home/idlesparks/deploy.sh';
$log_file = '/home/idlesparks/logs/webhook.log';

function log_message($msg) {
    global $log_file;
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $msg . "\n";
    file_put_contents($log_file, $line, FILE_APPEND | LOCK_EX);
}

// Verify request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    log_message('ERROR: Method not allowed');
    exit('Method not allowed');
}

// Get payload
$payload = file_get_contents('php://input');
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

// Verify signature (optional but recommended)
if ($secret !== 'change-me-in-cpanel' && $signature) {
    $expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
    if (!hash_equals($expected, $signature)) {
        http_response_code(401);
        log_message('ERROR: Invalid signature');
        exit('Invalid signature');
    }
}

// Parse JSON
$data = json_decode($payload, true);
if (!$data) {
    http_response_code(400);
    log_message('ERROR: Invalid JSON');
    exit('Invalid JSON');
}

// Check for push to main branch
$ref = $data['ref'] ?? '';
if ($ref !== 'refs/heads/main') {
    log_message("INFO: Ignoring push to $ref");
    exit('Ignored');
}

// Execute deploy
log_message('Deploy triggered by push to main');
$output = [];
$return_code = 0;
exec("bash $deploy_script 2>&1", $output, $return_code);

foreach ($output as $line) {
    log_message("DEPLOY: $line");
}

if ($return_code === 0) {
    log_message('✓ Deploy completed successfully');
    echo "Deploy successful\n";
} else {
    log_message('✗ Deploy failed');
    http_response_code(500);
    echo "Deploy failed\n";
}
