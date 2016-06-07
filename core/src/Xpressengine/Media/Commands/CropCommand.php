<?php
/**
 * This file is crop command
 *
 * @category    Media
 * @package     Xpressengine\Media
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Media\Commands;

use Xpressengine\Media\Coordinators\Position;

/**
 * crop 기능을 수행하는 command
 *
 * @category    Media
 * @package     Xpressengine\Media
 */
class CropCommand extends AbstractCommand implements CommandInterface
{
    /**
     * Position instance
     *
     * @var Position
     */
    protected $position;

    /**
     * Specific command name
     *
     * @return string
     */
    public function getName()
    {
        return $this->getMethod();
    }

    /**
     * Executed command method name
     *
     * @return string
     */
    public function getMethod()
    {
        return 'crop';
    }

    /**
     * Arguments of executed method
     *
     * @return array
     */
    public function getExecArgs()
    {
        return [
            $this->dimension->getWidth(),
            $this->dimension->getHeight(),
            $this->position ? $this->position->getLeft() : 0,
            $this->position ? $this->position->getTop() : 0
        ];
    }

    /**
     * Set a position object
     *
     * @param Position $position Position instance
     * @return void
     */
    public function setPosition(Position $position)
    {
        $this->position = $position;
    }
}
