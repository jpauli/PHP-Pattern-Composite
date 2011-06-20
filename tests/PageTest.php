<?php

use Composite\HtmlElements\Page;
use PHPUnit\Framework\TestCase;

class PageTest extends TestCase
{
    private Page $page;

    public function setUp() : void
    {
        $this->page = new Page(__FILE__);
    }

    public function testPageContent()
    {
        $this->assertMatchesRegularExpression('/'.__FUNCTION__.'/', (string)$this->page);
    }
}