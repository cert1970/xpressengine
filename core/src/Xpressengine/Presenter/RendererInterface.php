<?php
/**
 * RendererInterface
 *
 * @category  Presenter
 * @package   Xpressengine\Presenter
 * @author    XE Developers <developers@xpressengine.com>
 * @copyright 2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license   LGPL-2.1
 * @license   http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link      https://xpressengine.io
 */

namespace Xpressengine\Presenter;

use Illuminate\Contracts\Support\Renderable;

/**
 * RendererInterface
 * * Presenter 에서 사용 될 Renderer들을 위한 interface
 *
 * @category  Presenter
 * @package   Xpressengine\Presenter
 */
interface RendererInterface extends Renderable
{
    /**
     * Illuminate\Http\Request::initializeFormats() 에서 정의된 formats 에서 하나의 format
     *
     * @return string
     */
    public static function format();
}
