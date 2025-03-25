<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';

// Page-specific styles and scripts
$additionalCss = [
    '/assets/css/page-specific-style.css'
];

$additionalJs = [
    '/assets/js/page-specific-script.js'
];

// Page specific content
$pageTitle = "Service Name";
$pageDescription = "Description of the service";
$serviceName = "Service Name";
$serviceSlug = "service-slug";

require_once '../../../components/header.php';
?>

<!-- Page content here -->

<?php
include_once '../../../components/footer.php';
?> 