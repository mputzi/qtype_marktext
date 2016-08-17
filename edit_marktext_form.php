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
 * Defines the editing form for the qtype_marktext question type.
 *
 * @package    qtype_marktext
 * @subpackage marktext
 * @copyright  Martin Putzlocher (mp@mint-oer.de)

 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();


/**
 * qtype_marktext question editing form definition.
 *
 * @copyright  2016 Martin Putzlocher (mp@mint-oer.de)

 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_marktext_edit_form extends question_edit_form {

    protected function definition_inner($mform) {
    	global $PAGE;
    	
        
        $mform->addElement('text', 'markme', get_string('markme', 'qtype_marktext'), array('size'=>'50'));
		$mform->setType('markme', PARAM_RAW);
		
		$this->add_interactive_settings(true, true);
    }

    protected function data_preprocessing($question) {
        $question = parent::data_preprocessing($question);
        $question = $this->data_preprocessing_hints($question);

        return $question;
    }

    public function qtype() {
        return 'marktext';
    }
}
