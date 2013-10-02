<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	/**
	 * Salva config no registry
	 *
	 * @return void
	 */
	public function _initConfig()
	{
		$config = new Zend_Config($this->getApplication()->getOptions(), true);
		Zend_Registry::set('config', $config);
	}


	/**
	 * Inicializa a sessão
	 *
	 * @return void
	 */
	public function _initSession()
	{
		$session = new Zend_Session_Namespace('Agenda');
		Zend_Registry::set('session', $session);
	}


	/**
	 * Inicializa o banco de dados
	 *
	 * @return void
	 */
	public function _initDb()
	{
		$db = $this->getPluginResource('db')->getDbAdapter();
		Zend_Db_Table::setDefaultAdapter($db);
		Zend_Registry::set('db', $db);
	} 


	/**
	 * Inicializa o translate
	 *
	 */
	public function _initTranslate()
	{
		$config 		= Zend_Registry::get('config');
		$translate 		= $config->resources->translate;
		$locale			= $config->resources->locale;
		$zend_translate = new Zend_Translate(
						  $translate->adapter,
						  $translate->data,
						  $translate->default);
		Zend_Registry::set('Zend_Translate', $zend_translate);
	}
}

