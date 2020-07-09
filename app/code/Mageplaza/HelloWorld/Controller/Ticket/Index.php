<?php
namespace Mageplaza\HelloWorld\Controller\Ticket;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_ticketFactory;

    protected $_ticket;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Mageplaza\HelloWorld\Model\TicketFactory $ticketFactory,
        \Mageplaza\HelloWorld\Model\ResourceModel\Ticket $ticket
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_ticketFactory = $ticketFactory;
        $this->_ticket = $ticket;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo 111;die;
//        $tmp = $this->_post->getPostNameById(2);
//        var_dump($tmp);die;
//        $post = $this->_postFactory->create();
//        $collection = $post->getCollection();
//        foreach($collection as $item){
//            echo "<pre>";
//            print_r($item->getData());
//            echo "</pre>";
//        }
//        exit();
//        return $this->_pageFactory->create();
    }
}