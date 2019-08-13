<?php
class Achang_ChinaInvoice_Model_Observer
{

    const ORDER_ATTRIBUTE_FHC_ID = 'fapiao';

    /**
     * Event Hook: checkout_type_onepage_save_order
     *
     * @author Branko Ajzele
     *
     * @param $observer Varien_Event_Observer
     */
    public function hookToOrderSaveEvent($observer)
    {
        /**
         * NOTE:
         * Order has already been saved, now we simply add some stuff to it,
         * that will be saved to database. We add the stuff to Order object property
         * called "fapiao"
         */
//        $order       = new Mage_Sales_Model_Order();
//        $incrementId = Mage::getSingleton('checkout/session')->getLastRealOrderId();
//        $order->loadByIncrementId($incrementId);
//
//        $faPiao = null;
//        $faPiao = Mage::getSingleton('core/session')->getFapiao();
//        Mage::log($faPiao,null,'fapiao.log');
//        if ($faPiao) {
//            foreach ($faPiao as $key => $value) {
//                $order->setData($key, $value);
//            }
//        } Mage::log('1',null,'test.log');
//        $order->save();
        $order=Mage::getModel('sales/order')->load($observer->getEvent()->getOrder()->getId());
        $faPiao = null;
        $faPiao = Mage::getSingleton('core/session')->getFapiao();
        Mage::log($faPiao,null,'fapiao.log');
        if ($faPiao) {
            foreach ($faPiao as $key => $value) {
                $order->setData($key, $value);
            }
        }
        $order->save();
        Mage::log($order->getData(),null,'test.log');

    }


}