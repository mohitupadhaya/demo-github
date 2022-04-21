<?php
/**
 * @category   Demo
 * @package    Demo_Test
 * @author     mohitu@chetu.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Demo\Test\Model\ResourceModel\Test;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'test_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Demo\Test\Model\Test',
            'Demo\Test\Model\ResourceModel\Test'
        );
    }
}