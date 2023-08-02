# imageblendedcolorallocate

[![MIT License](https://img.shields.io/badge/license-MIT-0366d6.png?colorB=0366d6&style=flat-square)](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/LICENSE)
[![Current Release](https://img.shields.io/github/release/andrewgjohnson/imageblendedcolorallocate.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases)
[![GitHub Stars](https://img.shields.io/github/stars/andrewgjohnson/imageblendedcolorallocate.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imageblendedcolorallocate/stargazers)
[![Contributors](https://img.shields.io/github/contributors/andrewgjohnson/imageblendedcolorallocate.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imageblendedcolorallocate/graphs/contributors)
[![Packagist Downloads](https://img.shields.io/packagist/dt/andrewgjohnson/imageblendedcolorallocate.png?colorB=0366d6&style=flat-square&logoColor=white&logo=packagist)](https://packagist.org/packages/andrewgjohnson/imageblendedcolorallocate/stats)
[![Issues](https://img.shields.io/github/issues/andrewgjohnson/imageblendedcolorallocate.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imageblendedcolorallocate/issues)
[![Patreon](https://img.shields.io/endpoint.png?url=https%3A%2F%2Fshieldsio-patreon.vercel.app%2Fapi%3Fusername%3Dagjopensource%26type%3Dpatrons&colorB=0366d6&style=flat-square&logoColor=white&logo=patreon)](https://patreon.com/agjopensource)

<p align="center"><a href="https://imageblendedcolorallocate.agjgd.org/" title=""><img src="https://imageblendedcolorallocate.agjgd.org/documentation/imageblendedcolorallocate.agjgd.org/images/avatar.png" alt="" title="" width="400" id="avatar" /></a></p>

## Description

**imageblendedcolorallocate** is a function that will allocate a new blended color based on two existing allocated colors for your PHP GD images.

[![Patreon - Become a Patron](https://raster.shields.io/badge/Patreon%20-become%20a%20Patron-FD334A.png?style=for-the-badge&logo=patreon&logoColor=FD334A)](https://patreon.com/agjopensource)

**imageblendedcolorallocate** is an [agjgd.org](https://agjgd.org) project.

## Usage

### With Composer

This project offers support for the [Composer](https://getcomposer.org/) dependency manager. You can find the imageblendedcolorallocate package online on [packagist.org](https://packagist.org/packages/andrewgjohnson/imageblendedcolorallocate).

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

There are [other examples](https://github.com/andrewgjohnson/imageblendedcolorallocate/tree/master/examples) included in the GitHub repository and on [imageblendedcolorallocate.agjgd.org](https://imageblendedcolorallocate.agjgd.org/examples/).

## Help Requests

Please post any questions in the [discussions area](https://github.com/andrewgjohnson/imageblendedcolorallocate/discussions) on GitHub if you need help.

If you discover a bug please [enter an issue](https://github.com/andrewgjohnson/imageblendedcolorallocate/issues/new) on GitHub. When submitting an issue please use our [issue template](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/ISSUE_TEMPLATE.md).

## Contributing

Please read our [contributing guidelines](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/CONTRIBUTING.md) if you want to contribute.

You can contribute financially by becoming a [patron](https://patreon.com/agjopensource) at [patreon.com/agjopensource](https://patreon.com/agjopensource) to support imageblendedcolorallocate and [other agjgd.org projects](https://agjgd.org/projects/).

[![Patreon - Become a Patron](https://raster.shields.io/badge/Patreon%20-become%20a%20Patron-FD334A.png?style=for-the-badge&logo=patreon&logoColor=FD334A)](https://patreon.com/agjopensource)

## Acknowledgements

This project was started by [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson).

Full list of contributors:
 * [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)

Our [security policies and procedures](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/.github/SECURITY.md) comes via the [atomist/samples](https://github.com/atomist/samples/blob/master/SECURITY.md) project. Our [issue templates](https://github.com/andrewgjohnson/imageblendedcolorallocate/tree/master/.github/ISSUE_TEMPLATE) comes via the [tensorflow/tensorflow](https://github.com/tensorflow/tensorflow/blob/master/SECURITY.md) project. Our [pull request template](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/.github/PULL_REQUEST_TEMPLATE.md) comes via the [stevemao/github-issue-templates](https://github.com/stevemao/github-issue-templates) project. The [mountains photo](https://unsplash.com/photos/qJvpykJ5SKs) comes via [Gabriel Garcia Marengo](https://unsplash.com/@gabrielgm).

## Changelog

You can find all notable changes in the [changelog](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/CHANGELOG.md).
