<?php
/**
 * @category   Demo
 * @package    Demo_Test
 * @author     mohitu@chetu.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Demo\Test\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\NotFoundException;
use Demo\Test\Block\TestView;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_testview;

	public function __construct(
        Context $context,
        TestView $testview
    ) {
        $this->_testview = $testview;
        parent::__construct($context);
    }

	public function execute()
    {
    	if(!$this->_testview->getSingleData()){
    		throw new NotFoundException(__('Parameter is incorrect.'));
    	}
    	
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
