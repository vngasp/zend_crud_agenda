<?php

class Application_Form_Telefone extends Application_Form_Pessoa
{

    public function init()
    {
        
    	// executa a função da classe pai
    	parent::init();


    	// elemento fone
    	$fone = new Zend_Form_Element_Text('fone');
    	$fone->setLabel('Fone: ')
    		 ->setRequired(true)
    		 ->addFilter('StripTags')
    		 ->addValidator('NotEmpty')
             ->addValidator('Alnum')
             ->addValidator('regex', true, array('/[0-9]/'));


    	// elemento celular
    	$celular = new Zend_Form_Element_Text('celular');
    	$celular->setLabel('Celular: ')
    			->setRequired(false)
    			->addFilter('StripTags')
    			->addValidator('Alnum')
                ->addValidator('regex', true, array('/[0-9]/'));


    	// elemento submit
    	$submit = new Zend_Form_Element_Submit('submit');
    	$submit->setLabel('Adicionar');
    	$submit->setAttrib('id', 'Entrar');
        $submit->setAttrib('class', 'btn btn-info btn-small');


    	// add elemento
    	$this->addElements([$fone, $celular, $submit]);


    	// metodo form
    	$this->setAction('/contato/create')->setMethod('post');

    }


}

