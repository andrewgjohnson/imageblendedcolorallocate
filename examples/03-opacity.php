<?php

/**
 * Imageblendedcolorallocate Example (Opacity)
 *
 * Copyright (c) 2018-2026 Andrew G. Johnson <andrew@andrewgjohnson.com>
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
 * Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * PHP version 5
 *
 * @category  Andrewgjohnson
 * @package   Imageblendedcolorallocate
 * @author    Andrew G. Johnson <andrew@andrewgjohnson.com>
 * @copyright 2018-2026 Andrew G. Johnson <andrew@andrewgjohnson.com>
 * @license   https://opensource.org/licenses/mit/ The MIT License
 * @link      https://github.com/andrewgjohnson/imageblendedcolorallocate
 */

// Include the imageblendedcolorallocate source if you’re not using Composer
if (file_exists('../source/imageblendedcolorallocate.php')) {
    require_once '../source/imageblendedcolorallocate.php';
} elseif (!function_exists('imageblendedcolorallocate')) {
    die('imageblendedcolorallocate not found');
}

// Set the parameters for our image
$width             = 600;
$height            = 300;
$offset            = round($width / 16);
$rectangleWidth    = $offset * 2;
$rectangleHeight   = $height - ($offset * 2);

// Create our image
$im                = imagecreatetruecolor($width, $height);

// Set our image’s colors
$backgroundColor   = imagecolorallocate($im, 0xEE, 0xEE, 0xEE);
$blue              = imagecolorallocate($im, 0x00, 0x00, 0xFF);
$cyan              = imagecolorallocate($im, 0x00, 0xFF, 0xFF);
$blendedMostlyBlue = imageblendedcolorallocate($im, $blue, $cyan, 0.75); // 75%/25%
$blendedEvenly     = imageblendedcolorallocate($im, $blue, $cyan);       // 50%/50%
$blendedMostlyCyan = imageblendedcolorallocate($im, $blue, $cyan, 0.25); // 25%/75%

// Fill our image with the background color
imagefill($im, 0, 0, $backgroundColor);

// Fill our image with all of the colors
imagefilledrectangle(
    $im,
    ($offset * 1) + ($rectangleWidth * 0),
    $offset,
    ($offset + $rectangleWidth) * 1,
    $offset + $rectangleHeight,
    $cyan
);

imagefilledrectangle(
    $im,
    ($offset * 2) + ($rectangleWidth * 1),
    $offset,
    ($offset + $rectangleWidth) * 2,
    $offset + $rectangleHeight,
    $blendedMostlyCyan
);

imagefilledrectangle(
    $im,
    ($offset * 3) + ($rectangleWidth * 2),
    $offset,
    ($offset + $rectangleWidth) * 3,
    $offset + $rectangleHeight,
    $blendedEvenly
);

imagefilledrectangle(
    $im,
    ($offset * 4) + ($rectangleWidth * 3),
    $offset,
    ($offset + $rectangleWidth) * 4,
    $offset + $rectangleHeight,
    $blendedMostlyBlue
);

imagefilledrectangle(
    $im,
    ($offset * 5) + ($rectangleWidth * 4),
    $offset,
    ($offset + $rectangleWidth) * 5,
    $offset + $rectangleHeight,
    $blue
);

// Display our image and destroy the GD resource
header('Content-Type: image/png');
imagepng($im);
version_compare(PHP_VERSION, '8.0.0', '<') && imagedestroy($im);
