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

    public function getOne($id)
    {
        $ticketPriceTable = $this->getTable('mageplaza_helloworld_ticket');
        $connection = $this->getConnection();

        //查
        $select = $connection->select()->from(
//            $ticketPriceTable
            $this->getMainTable()
        )->where(
            'ticket_num=:ticket_num AND is_vip=:is_vip'
        );
        $bind = [':ticket_num' => 1, ':is_vip' => 1];
        $res = $connection->fetchAll($select, $bind);
        return $res;

          //改：
//        $insertData = ['expire_day' => 6];
//        $where = ['ticket_num = ?' => 1, 'is_vip = ?' => 1];
//        $connection->update($ticketPriceTable, $insertData, $where);

          //删：
//        $where = ['ticket_id = ?' => 2];
//        $connection->delete($ticketPriceTable, $where);

        //增：
//        $connection->insert(
//            $ticketPriceTable,
//            [
//                'ticket_num' => 1,
//                'available_over_num' => 1,
//                'expire_day' => 7,
//                'ticket_type' => 1,
//                'is_new' => 1,
//                'created_at' => time(),
//                'updated_at' => time(),
//                'is_vip' => 1,
//            ]
//        );

    }

}