<?php

/**
 * Imageblendedcolorallocate v2.0.0
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
 * PHP version 8
 *
 * As of v2.0.0 imageblendedcolorallocate is part of AgjGd (https://agjgd.org). The implementation now lives in the
 * \AndrewGJohnson\AgjGd class provided by the andrewgjohnson/agjgd package, and the global imageblendedcolorallocate()
 * function below is a thin reverse-compatibility wrapper that forwards to it.
 *
 * Please use \AndrewGJohnson\AgjGd::imageblendedcolorallocate() rather than imageblendedcolorallocate().
 *
 * This file deliberately does not declare strict_types so that loosely-typed calls written against the standalone
 * function keep coercing their arguments the way they always did.
 *
 * @category  Andrewgjohnson
 * @package   Imageblendedcolorallocate
 * @author    Andrew G. Johnson <andrew@andrewgjohnson.com>
 * @copyright 2018-2026 Andrew G. Johnson <andrew@andrewgjohnson.com>
 * @license   https://opensource.org/licenses/mit/ The MIT License
 * @link      https://github.com/andrewgjohnson/imageblendedcolorallocate
 */

use AndrewGJohnson\AgjGd;

if (!function_exists('imageblendedcolorallocate')) {
    /**
     * This function exists to support reverse compatibility.
     *
     * @deprecated 2.0.0 Use \AndrewGJohnson\AgjGd::imageblendedcolorallocate() instead.
     *
     * @param \GdImage  $image         A GdImage object.
     * @param int|false $color1        A color identifier created with imagecolorallocate().
     * @param int|false $color2        A color identifier created with imagecolorallocate().
     * @param ?float    $opacityColor1 The blend ratio for color1, between 0 and 1.
     *
     * @return int|false Returns a color identifier or FALSE if the allocation failed.
     */
    function imageblendedcolorallocate(
        $image,
        $color1,
        $color2,
        $opacityColor1 = 0.5
    ) {
        return AgjGd::imageblendedcolorallocate(
            $image,
            $color1,
            $color2,
            // A null opacity arrived at the standalone function untyped and evaluated as zero throughout its
            // arithmetic, making the result entirely color2 rather than the 0.5 default, so zero is passed along.
            $opacityColor1 ?? 0.0
        );
    }
}
