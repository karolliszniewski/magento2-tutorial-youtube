<?php
namespace Webdev\Helloworld\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getHelloMessage()
    {
        return 'Hello, this is a message from the block!';
    }
}
