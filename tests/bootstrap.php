<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (!defined('TEST_FILES_PATH')) {
    define('TEST_FILES_PATH', __DIR__ . DIRECTORY_SEPARATOR . '_files' . DIRECTORY_SEPARATOR);
}

$composer = file_exists(__DIR__ . '/../vendor/autoload.php');

if ($composer) {
    if (!defined('PHPUNIT_COMPOSER_INSTALL')) {
        define('PHPUNIT_COMPOSER_INSTALL', dirname(__DIR__) . '/vendor/autoload.php');
    }

    require_once __DIR__ . '/../vendor/autoload.php';
}






unset($composer, $jsonFile, $base, $file);