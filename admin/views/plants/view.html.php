<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
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
class PlantsViewPlants extends JViewLegacy
{
	/**
	 * Display the Plants view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
        // Get application
        $app = JFactory::getApplication();
        $context = "plants.list.admin.plants";
		// Get data from the model
		$this->items		    = $this->get('Items');
		$this->pagination	    = $this->get('Pagination');
       	$this->state			= $this->get('State');
		$this->filter_order 	= $app->getUserStateFromRequest($context.'filter_order', 'filter_order', 'short_name', 'cmd');
		$this->filter_order_Dir = $app->getUserStateFromRequest($context.'filter_order_Dir', 'filter_order_Dir', 'asc', 'cmd');
       	$this->filterForm    	= $this->get('FilterForm');
		$this->activeFilters 	= $this->get('ActiveFilters');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}


		// Display Tool bar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		$title = JText::_('COM_PLANTS_MANAGER');

		if ($this->pagination->total)
		{
			$title .= "<span style='font-size: 0.5em; vertical-align: middle;'>(" . $this->pagination->total . ")</span>";
		}

		JToolBarHelper::title($title, 'plant');
		JToolBarHelper::addNew('plant.add');
		JToolBarHelper::editList('plant.edit');
		JToolBarHelper::deleteList('', 'plants.delete');
	}
}