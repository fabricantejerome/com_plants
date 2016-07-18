<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_plants
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


/**
 * StudentInfractions model for the Joomla Infraction component.
 *
 * @since  1.6
 */
class PlantsModelPlant extends JModelList
{
	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 *
	 * @see     JController
	 * @since   1.6
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id'
			);
			
		}

		parent::__construct($config);
	}

	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{

		
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$input = JFactory::getApplication()->input;
		$id    = $input->get('id', 0);


		// Create the base select statement.
		$query->select(array('*'))
			  ->from($db->quoteName('#__plants_plants'))
			  ->where('id = '. (int) $id);

		// Filter: like / search
		$search = $this->getState('filter.search');

		if (!empty($search))
		{
			$like = $db->quote('%' . $search . '%');
			$query->where('short_name LIKE ' . $like);
		}

		// Add the list ordering clause.
		$orderCol	= $this->state->get('list.ordering', 'short_name');
		$orderDirn 	= $this->state->get('list.direction', 'asc');

		$query->order($db->escape($orderCol) . ' ' . $db->escape($orderDirn));

		//echo $query; die;
		//return $query;
		return $query;
	}


}