<?php
/**
 * @category   Demo
 * @package    Demo_Test
 * @author     mohitu@chetu.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Demo\Test\Controller\Adminhtml\Items;

class NewAction extends \Demo\Test\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
