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
namespace Module\Guild\Controller\Admin;

use Pi;
use Pi\Mvc\Controller\ActionController;

class IndexController extends ActionController
{
    public function indexAction()
    {
        $test = array(
        	'item 1' => 'item info 1',
        	'item 2' => 'item info 2',
        	'item 3' => 'item info 3',
        );
        // Set view
        $this->view()->setTemplate('empty');
        $this->view()->assign('test', $test);
    }
}