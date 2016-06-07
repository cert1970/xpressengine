<?php
/**
 * This file is dimension class
 *
 * @category    Media
 * @package     Xpressengine\Media
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Media\Coordinators;

/**
 * 가로 세로 크기 객체
 *
 * @category    Media
 * @package     Xpressengine\Media
 */
class Dimension
{
    /**
     * 가로 크기
     *
     * @var int
     */
    protected $width;

    /**
     * 세로 크기
     *
     * @var int
     */
    protected $height;

    /**
     * Constructor
     *
     * @param int $width  가로 크기
     * @param int $height 세로 크기
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * 가로 크기
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * 세로 크기
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
}
