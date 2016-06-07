<?php
/**
 * This file is MimeTypeFilter trait
 *
 * @category    Media
 * @package     Xpressengine\Media
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Media;

/**
 * Trait MimeTypeFilter
 *
 * @category    Media
 * @package     Xpressengine\Media
 */
trait MimeTypeFilter
{
    /**
     * MimeTypeScope instance
     *
     * @var MimeTypeScope
     */
    protected static $mimeTypeScope;

    /**
     * Boot the mime type filter trait for a model.
     *
     * @return void
     */
    public static function bootMimeTypeFilter()
    {
        static::addGlobalScope(static::getMimeTypeScope());
    }

    /**
     * Returns the mime type filter scope
     *
     * @return MimeTypeScope
     */
    public static function getMimeTypeScope()
    {
        if (!static::$mimeTypeScope) {
            static::$mimeTypeScope = new MimeTypeScope;
        }

        return static::$mimeTypeScope;
    }
}
