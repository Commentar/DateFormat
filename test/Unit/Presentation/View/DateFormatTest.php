<?php

namespace CommentarTest\Presentation\View;

use Commentar\Presentation\View\DateFormat;

class DateFormatTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Commentar\Presentation\View\DateFormat::__construct
     */
    public function testConstructCorrectAbstractInstance()
    {
        $view = new DateFormat(
            new \Commentar\Presentation\ThemeLoader('1970-01-01 00:00:00'),
            $this->getMock('\\Commentar\\ServiceBuilder\\Builder')
        );

        $this->assertInstanceOf('\\Commentar\\Presentation\\View\\View', $view);
    }

    /**
     * @covers Commentar\Presentation\View\DateFormat::__construct
     */
    public function testConstructCorrectInstance()
    {
        $view = new DateFormat(
            new \Commentar\Presentation\ThemeLoader('1970-01-01 00:00:00'),
            $this->getMock('\\Commentar\\ServiceBuilder\\Builder')
        );

        $this->assertInstanceOf('\\Commentar\\Presentation\\View\\DateFormat', $view);
    }

    /**
     * @covers Commentar\Presentation\View\DateFormat::__construct
     * @covers Commentar\Presentation\View\DateFormat::renderTemplate
     */
    public function testRenderTemplate()
    {
        $view = new DateFormat(
            new \Commentar\Presentation\ThemeLoader('1970-01-01 00:00:00'),
            $this->getMock('\\Commentar\\ServiceBuilder\\Builder'),
            ['timestamp' => new \DateTime('1970-01-01 00:00:00')]
        );

        $view->renderTemplate();

        $this->assertSame('01-01-1970 00:00:00', $view->formattedTimestamp);
    }
}
