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

$plugin->version = 2014012403;  // YYYYMMDDHH (year, month, day, 24-hr time)
$plugin->requires = 2012062500; // YYYYMMDDHH (This is the release version for Moodle 2.3).
$plugin->maturity  = MATURITY_STABLE;
$plugin->release  = '2.3+';
$plugin->dependencies = array('mod_turnitintooltwo' => 2014012402);