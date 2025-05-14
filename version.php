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
 * CampusConnect enrolment plugin version specification.
 *
 * @package    enrol_campusconnect
 * @copyright  2012 Davo Smith, Synergy Learning
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2025051400;  // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires = 2022112800; // Requires this Moodle version. Current: Moodle 4.1.
$plugin->supported = [401, 405];
$plugin->component = 'enrol_campusconnect';
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '4.5 (Build: 2025051400)';
