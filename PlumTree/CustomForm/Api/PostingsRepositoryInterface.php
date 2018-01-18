<?php
namespace PlumTree\CustomForm\Api;

use PlumTree\CustomForm\Api\Data\PostingsInterface;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Api\SearchCriteriaInterface;

interface PostingsRepositoryInterface 
{
    public function save(PostingsInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(PostingsInterface $page);

    public function deleteById($id);
}
