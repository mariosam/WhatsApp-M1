<?php
/**
 * Class Position
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * Give the new options value to config the system module.
 */
class MarioSAM_WhatsApp_Model_Config_Source_Position
{ 
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'bottom-left', 'label'=>__('Bottom Left')),
            array('value'=>'bottom-right', 'label'=>__('Bottom Right')),
            array('value'=>'top-left', 'label'=>__('Top Left')),
            array('value'=>'top-right', 'label'=>__('Top Right')),
            array('value'=>'left', 'label'=>__('Center Left')),
            array('value'=>'right', 'label'=>__('Center Right'))
        );
    }
}
