<?php
/**
 * InstanceConfigTest
 *
 * @category    Test
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Tests\Routing;

use Mockery as m;
use PHPUnit_Framework_TestCase;
use Xpressengine\Routing\InstanceConfig;

/**
 * Class InstanceRouteTest
 *
 * @package Xpressengine\Tests\Routing
 */
class InstanceConfigTest extends PHPUnit_Framework_TestCase
{

    /**
     * testInstanceConfig
     *
     * @return void
     */
    public function testInstanceConfig()
    {
        /**
         * @var InstanceConfig $instanceConfig
         */
        $instanceConfig = InstanceConfig::instance();

        $instanceConfig->setInstanceId('test');
        $instanceConfig->setModule('module/xpressengine@board');
        $instanceConfig->setTheme('defaultTheme');
        $instanceConfig->setUrl('freeboard');

        $this->assertEquals('freeboard', $instanceConfig->getUrl());
        $this->assertEquals('module/xpressengine@board', $instanceConfig->getModule());
        $this->assertEquals('test', $instanceConfig->getInstanceId());
        $this->assertEquals('defaultTheme', $instanceConfig->getTheme());
    }
}
