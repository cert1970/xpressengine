<?php
/**
 *  This file is part of the Xpressengine package.
 *
 * @category    User
 * @package     Xpressengine\User
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\User;

use Illuminate\Contracts\Auth\Guard as GuardContract;
use Xpressengine\User\Models\Guest;

/**
 * 이 인터페이스는 Xpressengine의 인증클래스가 구현해야 하는 인터페이스이다.
 * Laravel의 기본 인터페이스에 makeGuest가 추가되었다.
 *
 * @category    User
 * @package     Xpressengine\User
 */
interface GuardInterface extends GuardContract
{
    /**
     * Guest 회원 인스턴스를 생성하여 반환한다.
     *
     * @return Guest
     */
    public function makeGuest();
}
