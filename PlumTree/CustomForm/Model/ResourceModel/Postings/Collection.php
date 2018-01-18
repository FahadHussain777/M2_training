<?php
namespace PlumTree\CustomForm\Model\ResourceModel\Postings;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('PlumTree\CustomForm\Model\Postings','PlumTree\CustomForm\Model\ResourceModel\Postings');
    }
}
