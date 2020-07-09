<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel;


class Ticket extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('mageplaza_helloworld_ticket', 'ticket_id');
    }

}