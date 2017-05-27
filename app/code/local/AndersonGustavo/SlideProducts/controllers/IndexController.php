<?php

class AndersonGustavo_SlideProducts_IndexController extends Mage_Core_Controller_Front_Action{
    public function minhaactionAction(){
//        var_dump($this->getLayout()->createBlock('slideproducts/slideproducts'));
//        var_dump(Mage::getConfig()->getBlockClassName('slideproducts/slideproducts'));
//        var_dump(mageFindClassFile('AndersonGustavo_SlideProducts_Block_SlideProducts'));
//        $block = $this->getLayout()->createBlock('slideproducts/slideproducts')->setTemplate('slideproducts/slideproducts.phtml');
//        $html = $block->toHtml();
//        var_dump($html);
//        $this->loadLayout()->_title($this->__('slideproducts/slideproducts'));
//        $this->renderLayout();
        $this->loadLayout()->_title($this->__(''));
        $this->renderLayout();
    }
}