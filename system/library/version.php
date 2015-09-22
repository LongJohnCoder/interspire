<?php
/**
 * @package		Interspire eCommerce
 * @copyright	Copyright (C) 2015 Interspire Co.,Ltd. All rights reserved. (Interspire.vn)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

defined('AREXE') or die;

/**
 * Version information class for the Interspire eCommerce based on http://semver.org
 *
 * @since  1.0
 */
final class Version extends Object {

    protected $name = 'Interspire';

    protected $code = 'Wellington';

    protected $major = '1';

    protected $minor = '1';

    protected $patch = '2';

    protected $build = '';

    protected $status = 'Stable';

    protected $date = '09-September-2015';

    protected $time = '18:45';

    protected $zone = 'GMT +2';

    /**
     * Compares two a "PHP standardized" version number against the current Interspire version.
     *
     * @param   string  $minimum  The minimum version of the Interspire which is compatible.
     *
     * @return  bool    True if the version is compatible.
     *
     * @see     http://www.php.net/version_compare
     * @since   1.0
     */
    public function isCompatible($minimum) {
        return version_compare($this->getShortVersion(), $minimum, 'ge');
    }

    /**
     * Gets a "PHP standardized" version string for the current Interspire.
     *
     * @return  string  Version string.
     *
     * @since   1.0
     */
    public function getReleaseVersion() {
        return $this->get('major') . '.' . $this->get('minor');
    }

    /**
     * Gets a "PHP standardized" version string for the current Interspire.
     *
     * @return  string  Version string.
     *
     * @since   1.0
     */
    public function getShortVersion() {
        return $this->getReleaseVersion() . '.' . $this->get('patch');
    }

    /**
     * Gets a version string for the current Interspire with all release information.
     *
     * @return  string  Complete version string.
     *
     * @since   1.0
     */
    public function getLongVersion() {
        return $this->get('name') . ' ' . $this->getShortVersion() . ' '
        . $this->get('status') . ' [ ' . $this->get('code') . ' ] ' . $this->get('date') . ' '
        . $this->get('time') . ' ' . $this->get('zone');
    }
}