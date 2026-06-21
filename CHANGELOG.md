# Changelog

All notable changes to the [imageblendedcolorallocate project](https://github.com/andrewgjohnson/imageblendedcolorallocate) will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/) and this project adheres to [Semantic Versioning](https://semver.org/).

## [v1.1.2](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases/tag/v1.1.2) (May 13, 2026)
 * Changed the font in the examples from Arial to [Noto Sans](https://fonts.google.com/noto/specimen/Noto+Sans) which uses the [SIL OFL 1.1](https://openfontlicense.org/open-font-license-official-text/)
 * Updated documentation website to replace deprecated `hljs.initHighlighting()` call with `hljs.highlightAll()` and removed obsolete Google Analytics script
 * Fixed `imageblendedcolorallocate()` to extract RGBA components via `imagecolorsforindex()` instead of bit shift operations, correctly supporting palette images created with `imagecreate()` in addition to true color images created with `imagecreatetruecolor()`
 * Fixed `imageblendedcolorallocate()` to return `false` immediately when an invalid color identifier is passed as `$color1` or `$color2`
 * Added unit tests for blending behaviour, boundary conditions and invalid inputs
 * Removed references to defunct platforms (Google+ and Gitter) from the [Code of Conduct](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/.github/CODE_OF_CONDUCT.md)

## [v1.1.1](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases/tag/v1.1.1) (May 9, 2026)
 * Added [.gitattributes](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/.gitattributes) file to help manage end-of-line characters
 * Added a `version_compare()` check before all `imagedestroy()` calls; the `imagedestroy()` function became an optional step that did nothing as of PHP 8.0 but as of PHP 8.5 when invoked it produces a deprecation notice

## [v1.1.0](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases/tag/v1.1.0) (May 6, 2026)
 * Added [Contribute](https://imageblendedcolorallocate.agjgd.org/contribute/) page and updated [contributing guidelines](https://github.com/andrewgjohnson/imageblendedcolorallocate/blob/master/.github/CONTRIBUTING.md)
 * Added PHP_CodeSniffer support to enforce PSR-12 and PHP 5.0 compatibility
 * Added PHPUnit support for unit tests
 * Added `lint`, `lint:fix`, `phpunit` and `test` composer scripts
 * Fixed support for older PHP versions; this project now truly supports PHP 5.0
 * Fixed a number of broken links

## [v1.0.2](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases/tag/v1.0.2) (November 22, 2022)
 * Signed up for [Patreon](https://patreon.com/agjgd) and added links to README.md
 * Added `.github` folder to unclutter the root directory
 * Added `CODEOWNERS` file
 * Added `FUNDING.yml` file
 * Added `SECURITY.md` file
 * Added `SUPPORT.md` file
 * Updated shields.io badge aesthetics on README.md
 * Removed the MIT logo from the shields.io badge for imageblendedcolorallocate's license
 * Added Patrons shields.io badge to README.md
 * Enabled GitHub [discussions area](https://github.com/andrewgjohnson/imageblendedcolorallocate/discussions) and now recommending it over StackOverflow
 * Removed `ISSUE_TEMPLATE.md` file for our single issue template and replaced with `ISSUE_TEMPLATE` folder to separate bug reports & feature requests within GitHub [issues](https://github.com/andrewgjohnson/imageblendedcolorallocate/issues)
 * Updated [avatar image](https://imageblendedcolorallocate.agjgd.org/documentation/images/avatar.png)
 * Moved all Twitter activity for all [agjgd projects](https://agjgd.org/projects/) (including imageblendedcolorallocate) to the [@agjgdphp Twitter account](https://twitter.com/agjgdphp) as there were issues with the individual accounts being frozen
 * Changed documentation website to [imageblendedcolorallocate.agjgd.org](https://imageblendedcolorallocate.agjgd.org)
 * Updated copyright years to 2022

## [v1.0.1](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases/tag/v1.0.1) (December 15, 2018)
 * Launched online documentation at [imageblendedcolorallocate.agjgd.org](https://imageblendedcolorallocate.agjgd.org)

## [v1.0.0](https://github.com/andrewgjohnson/imageblendedcolorallocate/releases/tag/v1.0.0) (December 9, 2018)
 * Initial release of imageblendedcolorallocate
