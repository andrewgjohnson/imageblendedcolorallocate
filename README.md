# imageblendedcolorallocate

[![MIT License](https://img.shields.io/github/license/andrewgjohnson/imageblendedcolorallocate.png)](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/LICENSE)
[![Current Release](https://img.shields.io/github/release/andrewgjohnson/imageblendedcolorallocate.png)](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases)
[![GitHub Stars](https://img.shields.io/github/stars/andrewgjohnson/imageblendedcolorallocate.png)](https://github.com/andrewgjohnson/imageblendedcolorallocate/stargazers)
[![Contributors](https://img.shields.io/github/contributors/andrewgjohnson/imageblendedcolorallocate.png)](https://github.com/andrewgjohnson/imageblendedcolorallocate/graphs/contributors)
[![Packagist Downloads](https://img.shields.io/packagist/dt/andrewgjohnson/imageblendedcolorallocate.png)](https://packagist.org/packages/andrewgjohnson/imageblendedcolorallocate/stats)
[![Issues](https://img.shields.io/github/issues/andrewgjohnson/imageblendedcolorallocate.png)](https://github.com/andrewgjohnson/imageblendedcolorallocate/issues)

## Description

**imageblendedcolorallocate** is a function that will allocate a new blended color based on two existing allocated colors for your PHP GD images.

## Usage

### With Composer

This project offers support for the [Composer](https://getcomposer.org/) dependency manager.  You can find the imageblendedcolorallocate package online on [packagist.org](https://packagist.org/packages/andrewgjohnson/imageblendedcolorallocate).

#### Install using Composer

Either run this command:

    composer require andrewgjohnson/imageblendedcolorallocate

or add this to the `require` section of your composer.json file:

    "andrewgjohnson/imageblendedcolorallocate": "1.*"

### Without Composer

To use without Composer add an [include](http://php.net/manual/function.include.php) to the [`imageblendedcolorallocate.php` source file](https://raw.githubusercontent.com/andrewgjohnson/imageblendedcolorallocate/master/source/imageblendedcolorallocate.php).

    include_once 'source/imageblendedcolorallocate.php';

## Examples

    // standard method to allocate a color for an image
    $red = imagecolorallocate($im, 0xFF, 0x00, 0x00);
    $yellow = imagecolorallocate($im, 0xFF, 0xFF, 0x00);

    // this will allocate an average of our two previously allocated colors
    $orange = imageblendedcolorallocate($im, $red, $yellow);

    // yes, we do support alpha if you want to use transparent or translucent colors
    $opaqueBlack = imagecolorallocatealpha($im, 0x00, 0x00, 0x00, 0);
    $translucentBlack = imagecolorallocatealpha($im, 0x00, 0x00, 0x00, 63);
    $blendedBlack = imageblendedcolorallocate($im, $opaqueBlack, $translucentBlack);

    // by default we do a 50/50 blend where we average the red, blue, green & alpha values for each color
    // we also support non-50/50 blends
    $blue = imagecolorallocate($im, 0x00, 0x00, 0xFF);
    $cyan = imagecolorallocate($im, 0x00, 0xFF, 0xFF);
    $blendedMostlyCyan = imageblendedcolorallocate($im, $blue, $cyan, 0.25); // 25% blue, 75% cyan
    $blendedEvenly = imageblendedcolorallocate($im, $blue, $cyan); // 50% blue, 50% cyan
    $blendedMostlyBlue = imageblendedcolorallocate($im, $blue, $cyan, 0.75); // 75% blue, 25% cyan

There are [other examples](https://github.com/andrewgjohnson/imageblendedcolorallocate/tree/master/examples) included in the GitHub repository.

## Help Requests

Please post any questions on [stackoverflow.com](https://stackoverflow.com/search?q=imageblendedcolorallocate) if you need help.

If you discover a bug please [enter an issue](https://github.com/andrewgjohnson/imageblendedcolorallocate/issues/new) on GitHub.  When submitting an issue please use our [issue template](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/ISSUE_TEMPLATE.md).

## Contributing

Please read our [contributing guidelines](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/CONTRIBUTING.md) if you want to contribute.

## Acknowledgements

This project was started by [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson).

Full list of contributors:
 * [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)
 * [Philip van Heemstra (@vHeemstra)](https://github.com/vHeemstra)

Our [issue template](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/ISSUE_TEMPLATE.md) & [pull request template](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/PULL_REQUEST_TEMPLATE.md) come via the [stevemao/github-issue-templates](https://github.com/stevemao/github-issue-templates) project. The [mountains photo](https://unsplash.com/photos/qJvpykJ5SKs) comes via [Gabriel Garcia Marengo](https://unsplash.com/@gabrielgm).

## Changelog

You can find all notable changes in the [changelog](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/CHANGELOG.md).
