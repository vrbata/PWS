<?php

defined('_JEXEC') or die('Restricted access');

class PrusaWarehouseViewProduct extends JViewLegacy
{
    protected $item;

    protected $state;

    protected $form;

    public function display($tpl = null)
    {
        /** @var PrusaWareHouseModelProduct $model */
        $model = $this->getModel();

        $this->item  = $model->getItem();
        $this->state = $model->getState();
        $this->form  = $model->getForm();

        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));

            return false;
        }

        parent::display($tpl);
    }
}