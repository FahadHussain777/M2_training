<?php
namespace PlumTree\CustomForm\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{
	    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
    }
    public function getFormAction()
    {
    	return $this->getUrl('customform/page/form', ['_secure' => true]);
    } 
}
