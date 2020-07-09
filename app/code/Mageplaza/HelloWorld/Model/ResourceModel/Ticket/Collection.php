<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel\Ticket;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'ticket_id';
    protected $_eventPrefix = 'mageplaza_helloworld_ticket_collection';
    protected $_eventObject = 'ticket_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mageplaza\HelloWorld\Model\Ticket', 'Mageplaza\HelloWorld\Model\ResourceModel\Ticket');
    }

}