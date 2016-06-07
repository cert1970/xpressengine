<?php
/**
 * Builder
 *
 * @category    Database
 * @package     Xpressengine\Database
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Database\Eloquent;

use Illuminate\Database\Eloquent\Builder as OriginBuilder;
use Xpressengine\Database\DynamicQuery;
use Xpressengine\Database\ProxyManager;

/**
 * Builder
 *
 * * DynamicQuery 인터페이스 지원
 *
 * @category    Database
 * @package     Xpressengine\Database
 */
class Builder extends OriginBuilder
{
    /**
     * @var DynamicQuery
     */
    protected $query;

    /**
     * get proxy manager
     *
     * @return ProxyManager|null
     */
    public function getProxyManager()
    {
        return $this->query->getProxyManager();
    }
}
