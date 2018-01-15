<?php
namespace PlumTree\CustomForm\Model;
class Postings extends \Magento\Framework\Model\AbstractModel implements \PlumTree\CustomForm\Api\Data\PostingsInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'plumtree_customform_postings';

    protected function _construct()
    {
        $this->_init('PlumTree\CustomForm\Model\ResourceModel\Postings');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
