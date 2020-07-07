<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel;


class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('mageplaza_helloworld_post', 'post_id');
    }

    /**
     * Retrieves Post Name from DB by passed id.
     * 本篇未使用到 保留 以后研究
     * @param string $id
     * @return string|bool
     */
    public function getPostNameById($id)
    {
        $adapter = $this->getConnection();
        $select = $adapter->select()
            ->from($this->getMainTable(), 'name')
            ->where('post_id = :post_id');
        $binds = ['post_id' => (int) $id];
        return $adapter->fetchOne($select, $binds);
    }
}