<?php

use Composite\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    private Book $book;

    public function setUp() : void
    {
        $this->book = new Book("foo");
    }

    public function testBookContent()
    {
        $this->assertMatchesRegularExpression('/foo/', (string)$this->book);
    }
}