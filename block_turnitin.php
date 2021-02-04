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

require_once($CFG->dirroot.'/mod/turnitintooltwo/lib.php');

class block_turnitin extends block_base {
    public function init() {
        $this->title = get_string('turnitin', 'turnitintooltwo');
    }

    public function get_content() {
        global $CFG, $OUTPUT, $USER, $PAGE, $DB;

        if ($this->content !== null) {
            return $this->content;
        }

        $output = '';

        if (!empty($USER->id)) {
            $this->page->requires->js_init_call('M.block_turnitin.init');

            $cssurl = new moodle_url($CFG->wwwroot.'/mod/turnitintooltwo/css/styles_block.css');
            $PAGE->requires->css($cssurl);

            $output .= $OUTPUT->box($OUTPUT->pix_icon('y/loading', 'Loading...'), 'centered_cell block_loading', 'tii_block_loading');
            $output .= html_writer::link($CFG->wwwroot.'/mod/turnitintooltwo/extras.php?cmd=courses',
                                        html_writer::tag('noscript', get_string('coursestomigrate', 'mod_turnitintooltwo', '')), array('id' => 'block_migrate_content'));
        }

        $this->content = new stdClass;
        $this->content->text = $output;
        $this->content->footer = '';

        return $this->content;
    }
}