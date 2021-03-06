<?php

defined('_JEXEC') or die;

class PrusaWarehouseModelSupplier extends JModelAdmin
{
    protected function canDelete($record)
    {
        return true;
    }

    public function getTable($type = 'Supplier', $prefix = 'PrusaWarehouseTable', $config = [])
    {
        JTable::addIncludePath(JPATH_ROOT . '/components/com_prusawarehouse/tables');

        return JTable::getInstance($type, $prefix, $config);
    }


    public function getForm($data = [], $loadData = true)
    {
        $form = $this->loadForm('com_prusawarehouse.supplier', 'supplier', ['control' => 'jform', 'load_data' => $loadData]);

        if (empty($form)) {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState('com_prusawarehouse.edit.supplier.data', []);

        if (empty($data)) {
            $data = $this->getItem();
        }

        return $data;
    }
}
