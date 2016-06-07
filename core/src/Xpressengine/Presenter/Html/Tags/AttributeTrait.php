<?php
/**
 * AttributeTrait
 *
 * @category    Frontend
 * @package     Xpressengine\Presenter
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Presenter\Html\Tags;

/**
 * AttributeTrait
 *
 * @category    Frontend
 * @package     Xpressengine\Presenter
 */
trait AttributeTrait
{
    protected $attributes = [];

    /**
     * 태그에 속성을 지정한다.
     *
     * @param string $name  name
     * @param string $value value
     * @return $this
     */
    public function attr($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }
}
