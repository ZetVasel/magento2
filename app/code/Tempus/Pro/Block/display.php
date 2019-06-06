<?php
namespace Tempus\Pro\Block;

class display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function NewBlock()
    {
        return __('This is new Block from code in module Pro');
    }
}