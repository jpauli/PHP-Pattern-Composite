<?php
namespace Composite\HtmlElements;

class SimpleText extends BaseHtmlElement
{
    public function getTag() : string
    {
        return 'em';
    }
}