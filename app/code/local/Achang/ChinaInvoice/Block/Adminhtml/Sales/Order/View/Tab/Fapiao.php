<?php
/**
 * Created by  Achang WebDev
 *
 * @file Fapiao.php
 * @author Owen <owen@achang.com>
 * @copyright Achang WebDev 
 * @link http://www.achang.com
 *
 * Date Time: 13-5-30 下午9:42
 */

class Achang_ChinaInvoice_Block_Adminhtml_Sales_Order_View_Tab_Fapiao
    extends Mage_Adminhtml_Block_Template
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{

    protected $_chat = null;

    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('fapiao/fapiao.phtml');
    }

    public function getTabLabel() {
        return $this->__('Official Invoice');
    }

    public function getTabTitle() {
        return $this->__('Official Invoice');
    }

    public function canShowTab() {
        return true;
    }

    public function isHidden() {
        return false;
    }

    public function getOrder(){
        return Mage::registry('current_order');
    }
}