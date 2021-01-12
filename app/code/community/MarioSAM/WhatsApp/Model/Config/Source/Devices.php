<?php
/**
 * Class Devices
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * Give the new options value to config the system module.
 */
class MarioSAM_WhatsApp_Model_Config_Source_Devices
{ 
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'all', 'label'=>__('Desktop/Mobile')),
            array('value'=>'desktop', 'label'=>__('Desktop Only')),
            array('value'=>'mobile', 'label'=>__('Mobile Only'))
        );
    }
}
