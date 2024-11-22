#! /usr/bin/php

<?php
if (isset($argv[1]) && isset($argv[2])) {
    echo $argv[1] + $argv[2];
    echo "\n\n";
} else {
    echo "Error: please provide 2 numbers to sum when invoking this script";
}