<?php
/**
 * @package     Andersongustavo_Sociallinks
 * @author      Anderson Gustavo Rodrigues Alves - anderson.quata@hotmail.com
 */

class AndersonGustavo_SlideProducts_Block_SlideProducts extends Mage_Core_Block_Template {

//    public function __construct(array $args)
//    {
//        $this->setTemplate('slideproducts/slideproducts.phtml');
//    }

    public function isEnabled(){
        return Mage::getStoreConfig('andersongustavo/category/enabled');
    }

    private function getCategories(){
        return Mage::getStoreConfig('andersongustavo/category/category_groups');
    }

    public function getHeader(){
        return Mage::getStoreConfig('andersongustavo/category/header');
    }

    public function getCategoriesId(){
        $enabledCategories = explode(',',$this->getCategories());
        return $enabledCategories;
    }

    public function getCategoryProducts($enabledCategoryId){
        $categoryProducts = Mage::getModel('catalog/category')
                                        ->load($enabledCategoryId)
                                        ->getProductCollection()
                                        ->addAttributeToSelect("*")
                                        ->addAttributeToFilter('status',1);
        return $categoryProducts;
    }

    public function getProductImage($id){
        $product = Mage::getModel('catalog/product')->load($id);

        foreach ($product->getMediaGalleryImages() as $image){
            return $image->getUrl();
        }
    }
}