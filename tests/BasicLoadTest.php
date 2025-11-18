<?php
echo "Running basic test...\n";

if (file_exists("webb/index.php")) {
    echo "OK: index.php ditemukan\n";
} else {
    echo "ERROR: index.php tidak ditemukan\n";
}
