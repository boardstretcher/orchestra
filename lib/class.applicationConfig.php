<?php

class appConfig {

    protected $config;
    protected $configFile = 'config/system.ini';

    public function appConfig(){
        $config = new Zend_Config(array(), true);
        $config->production = array();
        $config->staging    = array();
        $config->setExtend('base');


    }

    public function openConfig($this->configFile){

    }

    public function saveConfig($this->configFile){
        $writer = new Zend_Config_Writer_Xml(array('config' => $config, 'filename' => '$this->configFile'));
        $writer->write();
    }

    public function retrieveConfigValueSingle($this->configFile){

    }


}


?>