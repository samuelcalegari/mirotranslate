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
 * Define all the backup steps that will be used by the backup_mirotranslate_activity_task
 *
 * @package   mod_mirotranslate
 * @copyright 2020 Samuel Calegari <samuel.calegari@univ-perp.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Define the complete mirotranslate structure for backup, with file and id annotations
 *
 * @package   mod_mirotranslate
 * @copyright 2020 Samuel Calegari <samuel.calegari@univ-perp.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class backup_mirotranslate_activity_structure_step extends backup_activity_structure_step {

    /**
     * Defines the backup structure of the module
     *
     * @return backup_nested_element
     */
    protected function define_structure() {

        $mirotranslate = new backup_nested_element('mirotranslate', array('id'), array('name', 'intro', 'introformat', 'externalurl', 'timecreated', 'timemodified'));
        $mirotranslate->set_source_table('mirotranslate', array('id' => backup::VAR_ACTIVITYID));
        $mirotranslate->annotate_files('mod_mirotranslate', 'intro', null);
        return $this->prepare_activity_structure($mirotranslate);

    }
}
