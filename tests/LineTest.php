<?php

use Composite\Line;
use PHPUnit\Framework\TestCase;

class LineTest extends TestCase
{
    private Line $line;

    public function setUp() : void
    {
        $this->line = new Line;
    }

    public function testLineCantHaveChildren()
    {
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage('children');
        $this->line->addNode(new Line);
    }

    public function testLineContent()
    {
        $this->assertEquals("<hr>", (string)$this->line);
    }
}