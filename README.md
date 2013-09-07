DateFormat
=

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
