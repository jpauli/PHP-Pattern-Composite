<?php
use Composite\HtmlElements\BaseHtmlElement;
use PHPUnit\Framework\TestCase;

class BaseHtmlElementTest extends TestCase
{
    private BaseHtmlElement $htmlElement;
    private const HTML_TEXT = "foo";

    public function setUp() : void
    {
        $this->htmlElement = $this->getMockForAbstractClass(BaseHtmlElement::CLASS, [self::HTML_TEXT]);
    }

    public function assertPreConditions() : void
    {
        $this->assertEquals(self::HTML_TEXT, $this->htmlElement->text);
    }

    public function testTagFormattingOutput()
    {
        $this->htmlElement->expects($this->once())
            ->method('getTag')
            ->will($this->returnValue('fooTag'));

        $this->assertEquals('<fooTag>' . self::HTML_TEXT . '</fooTag>', $this->htmlElement->getContent());
    }
}