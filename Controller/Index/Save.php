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
use Demo\Test\Model\TestFactory;

class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var Test
     */
    protected $_test;

    public function __construct(
		Context $context,
        TestFactory $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
	public function execute()
    {
        $data = $this->getRequest()->getParams();
    	$test = $this->_test->create();
        $test->setData($data);
        if($test->save()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('test/index/index');
        return $resultRedirect;
    }
}