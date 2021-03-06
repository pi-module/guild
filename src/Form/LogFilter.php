<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */
namespace Module\Guide\Form;

use Pi;
use Zend\InputFilter\InputFilter;

class LogFilter extends InputFilter
{
    public function __construct()
    {
    	// section
        $this->add(array(
            'name' => 'section',
            'required' => false,
        ));
        // uid
        $this->add(array(
            'name' => 'uid',
            'required' => false,
        ));
    }
}    	