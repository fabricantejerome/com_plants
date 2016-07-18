<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_plants
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorlds View
 *
 * @since  0.0.1
 */
class PlantsViewPlant extends JViewLegacy
{
	function display($tpl = null)
	{
		$app = JFactory::getApplication();
		$id = $app->input->get('id');
		$context = "plants.list.site.plant";
		$model = $this->getModel();
		$this->items = $model->getItems($id);
		//$this->pagination		= $this->get('Pagination');
		$this->state			= $this->get('State');

		// $this->filter_order 	= $app->getUserStateFromRequest($context.'filter_order', 'filter_order', 'id', 'cmd');
		// $this->filter_order_Dir = $app->getUserStateFromRequest($context.'filter_order_Dir', 'filter_order_Dir', 'asc', 'cmd');
		
		parent::display($tpl);
	}
}