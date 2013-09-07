DateFormat
=

[![Build Status](https://travis-ci.org/Commentar/DateFormat.png?branch=master)](https://travis-ci.org/Commentar/DateFormat) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Commentar/DateFormat/badges/quality-score.png?s=de8f464b0b29483baecf1751883781e40840a621)](https://scrutinizer-ci.com/g/Commentar/DateFormat/) [![Code Coverage](https://scrutinizer-ci.com/g/Commentar/DateFormat/badges/coverage.png?s=c0b35e140c622cd80b88b8b9882ad228c253ae73)](https://scrutinizer-ci.com/g/Commentar/DateFormat/) [![Latest Stable Version](https://poser.pugx.org/Commentar/date-format/v/stable.png)](https://packagist.org/packages/Commentar/date-format) [![Total Downloads](https://poser.pugx.org/Commentar/date-format/downloads.png)](https://packagist.org/packages/Commentar/date-format)

Simple date renderer for the [Commentar][commentar] project. This date formatter formats DateTime objects used in comments. Examples of these dates are "date posted" and "post updated" timestamps.

Installation
-

Add the formatter to the project's `composer.json` file:

    "require": {
        "commentar/date-format": "0.0.*",
    }

Use it in your templates:

    <?php echo $this->renderView('DateFormat', ['timestamp' => $comment['updated']]); ?>

[commentar]:https://github.com/Commentar/Commentar
