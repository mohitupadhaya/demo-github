<?php
/**
 * @category   Demo
 * @package    Demo_Test
 * @author     mohitu@chetu.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Demo\Test\Block;

use Magento\Framework\View\Element\Template\Context;
use Demo\Test\Model\TestFactory;
use Magento\Cms\Model\Template\FilterProvider;
/**
 * Test View block
 */
class TestView extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Test
     */
    protected $_test;
    public function __construct(
        Context $context,
        TestFactory $test,
        FilterProvider $filterProvider
    ) {
        $this->_test = $test;
        $this->_filterProvider = $filterProvider;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Demo Test Module View Page'));
        
        return parent::_prepareLayout();
    }

    public function getSingleData()
    {
        $id = $this->getRequest()->getParam('id');
        $test = $this->_test->create();
        $singleData = $test->load($id);
        if($singleData->getTestId() || $singleData['test_id'] && $singleData->getStatus() == 1){
            return $singleData;
        }else{
            return false;
        }
    }
}