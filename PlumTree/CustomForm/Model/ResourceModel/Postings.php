<?php
namespace PlumTree\CustomForm\Model\ResourceModel;
class Postings extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('plumtree_customform_postings','Post_id');
    }
}
