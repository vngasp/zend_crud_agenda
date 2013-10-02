<?php

class ContatoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_forward('retrieve');
    }

    public function retrieveAction()
    {
        $contatos    = new Application_Model_Contatos();
        $this->view->contato = $contatos->fetchAll();

    }

    public function createAction()
    {
        $form = new Application_Form_Telefone();
        $contato = new Application_Model_Contatos();

        // tem dados
        if ($this->_request->isPost()) {

            // valida form
            if ($form->isValid($this->_request->getPost())) {

                $id = $contato->insert($form->getValues());
                $this->_redirect('contato/retrieve');

            } // form inválido
             else {
                // mostra o erros e popula o form com os dados
                $form->populate($form->getValues());
             }

        }

        $this->view->form = $form;
    }

    public function updateAction()
    {
            
        $form = new Application_Form_Telefone();
        $form->setAction('/contato/update');
        $form->submit->setLabel('Alterar');

        $contatos = new Application_Model_Contatos();

        // tem dados
        if ($this->_request->isPost()) {

            // valida form
            if ($form->isValid($this->_request->getPost())) {

                $values = $form->getValues();
                $contatos->update($values, 'id = '. $values['id']);
                $this->_redirect('contato/retrieve');

            } // form invalido
             else {
                $form->populate($form->getValues());
             }

        } // não tem dados
         else {

            $id = $this->_getParam('id');
            $contato = $contatos->fetchRow("id = $id")->toArray();
            $form->populate($contato);

         }

         $this->view->form = $form;

    }

    public function deleteAction()
    {
        $contato = new Application_Model_Contatos();
        $id  = $this->_getParam('id');
        $contato->delete("id = $id");
        $this->_redirect('contato/retrieve');
    }


}









