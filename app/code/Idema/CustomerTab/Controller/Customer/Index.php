<?php
namespace Idema\CustomerTab\Controller\Customer;

/**
 * Class Index
 * @package Idema\CustomerTab\Controller\Customer
 */
class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {

        $this->_view->loadLayout();

        $this->_view->renderLayout();
    }
}