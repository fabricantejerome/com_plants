<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

?>

<div class="row-fluid">
	<h3><?php echo JText::_('COM_PLANTS_PLANT_DETAILS'); ?></h3>
	<table class="table table-striped table-hover">
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					//$link = JRoute::_('index.php?option=com_plants&view=plant&id=' . $row->id);
				?>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_SHORT_NAME') ?></td>
						<td><?php echo $row->short_name; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_DESCRIPTION') ?></td>
						<td><?php echo $row->description; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_COMPANY_NAME') ?></td>
						<td><?php echo $row->company_name; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_ADDRESS_LINE1') ?></td>
						<td><?php echo $row->address_line1; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_ADDRESS_LINE2') ?></td>
						<td><?php echo $row->address_line2; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_POSTCODE_CITY') ?></td>
						<td><?php echo $row->postcode_city; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_COUNTRY') ?></td>
						<td><?php echo $row->country; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_TEL') ?></td>
						<td><?php echo $row->tel; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_FAX') ?></td>
						<td><?php echo $row->fax; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_EMAIL') ?></td>
						<td><?php echo $row->email; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_IMAGES') ?></td>
						<td><?php echo $row->images; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_QUALITY_CERTIFICATE') ?></td>
						<td><?php echo $row->quality_certificate; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_QUALITY_CERTIFICATES') ?></td>
						<td><?php echo $row->quality_certificates; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_QUALITY_ADDRESS') ?></td>
						<td><?php echo $row->address; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_MAP') ?></td>
						<td><?php echo $row->map; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_PUBLISHED') ?></td>
						<td><?php echo $row->published; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_CREATED') ?></td>
						<td><?php echo $row->created; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_CREATED_BY') ?></td>
						<td><?php echo $row->created_by; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_MODIFIED') ?></td>
						<td><?php echo $row->modified; ?></td>
					</tr>
					<tr>
						<td><?php echo JText::_('COM_PLANTS_PLANT_MODIFIED_BY') ?></td>
						<td><?php echo $row->modified_by; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</div>
