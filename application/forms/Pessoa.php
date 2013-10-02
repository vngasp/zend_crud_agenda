<?php

abstract class Application_Form_Pessoa extends Zend_Form
{

    public function init()
    {
        
    	// nome do formulario
    	$this->setName('Contato');

        // elemento hidden
        $id  = new Zend_Form_Element_Hidden('id');


    	// elementos nome
    	$nome = new Zend_Form_Element_Text('nome');
    	$nome->setLabel('Nome: ')
    		 ->setRequired(true)
    		 ->addFilter('StripTags')
             ->addFilter('StringToUpper')
    		 ->addValidator('Alpha')
             ->addValidator('NotEmpty');


    	// elemento sobrenome
    	$sobrenome = new Zend_Form_Element_Text('sobrenome');
    	$sobrenome->setLabel('Sobrenome: ')
    			  ->setRequired(true)
    			  ->addFilter('StripTags')
                  ->addFilter('StringToUpper')
    			  ->addValidator('NotEmpty') 
                  ->addValidator('Alpha');


    	// elemento email
    	$email = new Zend_Form_Element_Text('email');
    	$email->setLabel('Email: ')
    		  ->setRequired(true)
    		  ->addFilter('StripTags')
    		  ->addValidator('NotEmpty')
              ->addValidator('EmailAddress');


    	// add elemento
    	$this->addElements([$id, $nome, $sobrenome, $email]);


    }


}

