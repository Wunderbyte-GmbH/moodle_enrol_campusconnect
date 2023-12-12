<?php
// This file is part of the CampusConnect plugin for Moodle - http://moodle.org/
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
 * Campusconnect enrolment plugin main library file.
 *
 * @package    enrol_campusconnect
 * @copyright  2023 Wunderbyte Gmbh <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Campusconnect enrolment plugin implementation.
 * @package    enrol_campusconnect
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class enrol_campusconnect_plugin extends enrol_plugin {

    /**
     * Roles_protected.
     *
     * @return mixed
     *
     */
    public function roles_protected() {
        // Users may NOT tweak the roles later.
        return true;
    }

    /**
     * Allow enrol.
     *
     * @param stdClass $instance
     *
     * @return mixed
     *
     */
    public function allow_enrol(stdClass $instance) {
        // Users with enrol cap may NOT enrol other users via this plugin.
        return false;
    }

    /**
     * Allow unenrol.
     *
     * @param stdClass $instance
     *
     * @return mixed
     *
     */
    public function allow_unenrol(stdClass $instance) {
        // Users with unenrol cap may NOT unenrol other users via this plugin.
        return false;
    }

    /**
     * Allow manage.
     *
     * @param stdClass $instance
     *
     * @return mixed
     *
     */
    public function allow_manage(stdClass $instance) {
        // Users with manage cap may NOT tweak period and status.
        return false;
    }

    /**
     * Instance deleteable.
     *
     * @param mixed $instance
     *
     * @return mixed
     *
     */
    public function instance_deleteable($instance) {
        // Users should NOT be able to delete the instance.
        return false;
    }

    /**
     * Add new instance of enrol plugin with default settings.
     * @param object $course
     * @return int id of new instance, null if can not be created
     */
    public function add_default_instance($course) {
        return $this->add_instance($course, ['status' => ENROL_INSTANCE_ENABLED]);
    }

    /**
     * Add new instance of enrol plugin.
     * @param object $course
     * @param array $fields instance fields
     * @return int|null id of new instance, null if can not be created
     */
    public function add_instance($course, array $fields = null) {
        global $DB;

        if ($DB->record_exists('enrol', ['courseid' => $course->id, 'enrol' => 'campusconnect'])) {
            // Only one instance allowed, sorry.
            return null;
        }

        return parent::add_instance($course, $fields);
    }
}
