<?php

class Siliconrockstar_Showconfig_Model_Observer {

    /**
     * If GET param 'downloadConfig' exists, then send Magento config as XML doc and exit
     * 
     * @param Varien_Event_Observer $observer
     */
    public function sendConfig(Varien_Event_Observer $observer) {
        
        $downloadCongfig = Mage::app()->getRequest()->getParam('showConfig');
        
        if (!empty($downloadCongfig)) {
            header('Content-Type:text/xml');
            echo Mage::app()->getConfig()->getXmlString();
            die();
        }
        
    }

}
