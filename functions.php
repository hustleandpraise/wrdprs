<?php

$setup_includes = [
    'lib/setup.php',        // Theme setup
    'lib/titles.php',       // Page titles
    'lib/wrapper.php',      // Theme wrapper class
    'lib/post_types.php',   // Post Types
    'lib/methods.php',      // Function Methods
];

foreach ($setup_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf('Error locating %s for inclusion', $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);