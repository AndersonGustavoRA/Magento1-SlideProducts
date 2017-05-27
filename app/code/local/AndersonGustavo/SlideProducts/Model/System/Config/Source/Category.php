<?php
/**
 * @package     Andersongustavo_Sociallinks
 * @author      Anderson Gustavo Rodrigues Alves - anderson.quata@hotmail.com
 */

class AndersonGustavo_SlideProducts_Model_System_Config_Source_Category extends Mage_Adminhtml_Model_System_Config_Source_Category
{
    public function toOptionArray(){
        $collection = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*');

        $options = array();

        foreach ($collection as $category){
            if($category->getName() != 'Root Catalog'){
                $options[] = array(
                    'label' => $category->getName(),
                    'value' => $category->getId()
                );
            }
        }
        return $options;
    }
}