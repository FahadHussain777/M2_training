<?php
namespace PlumTree\CustomForm\Ui\Component\Listing\DataProviders\Plumtree\Customform;



class Grid extends \Magento\Ui\DataProvider\AbstractDataProvider
{

    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \PlumTree\CustomForm\Model\ResourceModel\Postings\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
