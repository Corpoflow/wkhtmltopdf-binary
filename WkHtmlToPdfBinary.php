<?php

namespace corpoflow\WkHtmlToPdfBinary;

/**
 * Class WkHtmlToPdfBinary
 *
 * @package corpoflow\WkHtmlToPdfBinary
 */
class WkHtmlToPdfBinary {

    /**
     * @param bool $binary
     *
     * @return string
     */
    public static function path($binary = false) {

        # No specific binary passed, so go detect
        if ($binary === false) {

            # Check if we're on x32 or x64
            $architecture = PHP_INT_SIZE == 4 ? '32' : '64';

            switch (strtolower(PHP_OS)) {
                case 'linux': # Linux
                    $binary = 'wkhtmltopdf-linux-' . $architecture;
                    break;
                case 'windows': # Windows
                    $binary = 'wkhtmltopdf-windows-' . $architecture . '.exe';
                    break;
                default: # Always fallback to linux x64
                    $binary = 'wkhtmltopdf-linux-amd64';
            }
        }

        return __DIR__ . DIRECTORY_SEPARATOR . 'binaries' . DIRECTORY_SEPARATOR . $binary;
    }

}
