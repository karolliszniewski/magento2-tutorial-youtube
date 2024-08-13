<?php

namespace Webdev\Helloworld\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function getHelloWorldText()
    {
        return "Hello World!";
    }
}
