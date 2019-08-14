<?php
/**
 * MageSupport.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magesupport.com/license/
 *
 * @category   MS
 * @package    SL_Cartdrop
 * @copyright  Copyright (c) 2008-2010 MageSupport.com (http://www.magesupport.com)
 * @license    http://www.magesupport.com/license/
 */
class SL_Cartdrop_Model_System_Config_Source_Display
{
     public function toOptionArray()
    {
        return array(
            array('value'=>'yes', 'label'=>Mage::helper('cartdrop')->__('Yes')),
            array('value'=>'no', 'label'=>Mage::helper('cartdrop')->__('No'))
        );
    }}