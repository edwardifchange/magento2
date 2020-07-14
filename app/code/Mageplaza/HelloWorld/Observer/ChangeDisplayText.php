<?php
namespace Mageplaza\HelloWorld\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $displayText = $observer->getData('text');
        $displayText->setText('Execute event successfully.');

        return $this;
    }
}