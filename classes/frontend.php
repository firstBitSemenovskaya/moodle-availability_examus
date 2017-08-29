<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Availability plugin for integration with Examus proctoring system.
 *
 * @package    availability_examus
 * @copyright  2017 Max Pomazuev
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace availability_examus;

defined('MOODLE_INTERNAL') || die();

/**
 * Frontend class
 * @copyright  2017 Max Pomazuev
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class frontend extends \core_availability\frontend {

    /**
     * get_javascript_strings
     *
     * @return array
     */
    protected function get_javascript_strings() {
        return ['title', 'error_setduration', 'duration', 'link', 'mode', 'normal_mode', 'olympics_mode', 'identification_mode'];
    }

    /**
     * get_javascript_init_params
     *
     * @param int $course Course id
     * @param \cm_info $cm Cm
     * @param \section_info $section Section
     * @return array
     */
    protected function get_javascript_init_params($course, \cm_info $cm = null,
            \section_info $section = null) {
        return array();
    }

    /**
     * allow_add
     *
     * @param int $course Course id
     * @param \cm_info $cm Cm
     * @param \section_info $section Section
     * @return array
     */
    protected function allow_add($course, \cm_info $cm = null,
            \section_info $section = null) {
        return true;
    }
}