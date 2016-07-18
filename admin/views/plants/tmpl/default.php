<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_plants
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

JHtml::_('formbehavior.chosen', 'select');
$listOrder     = $this->escape($this->filter_order);
$listDirn      = $this->escape($this->filter_order_Dir);
?>
<form action="index.php?option=com_plants&view=plants" method="post" id="adminForm" name="adminForm">
	<div class="row-fluid">
		<div class="span6">
			<?php echo JText::_('COM_PLANTS_PLANTS_FILTER'); ?>
			<?php
				echo JLayoutHelper::render(
					'joomla.searchtools.default',
					array('view' => $this)
				);
			?>
		</div>
	</div>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_PLANTS_HEADING_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="10%">
				<?php echo JHtml::_('grid.sort', 'COM_PLANTS_HEADING_SHORTNAME', 'short_name', $listDirn, $listOrder); ?>
			</th>
			<th width="25%">
				<?php echo JHtml::_('grid.sort', 'COM_PLANTS_HEADING_COMPANYNAME', 'company_name', $listDirn, $listOrder); ?>
			</th>
			<th width="25%">
				<?php echo JHtml::_('grid.sort', 'COM_PLANTS_HEADING_EMAIL', 'email', $listDirn, $listOrder); ?>
			</th>
			<th width="30%">
				<?php echo JHtml::_('grid.sort', 'COM_PLANTS_HEADING_TEL', 'tel', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'COM_PLANTS_HEADING_PUBLISHED', 'published', $listDirn, $listOrder); ?>
			</th>
			<th width="2%">
				<?php echo JHtml::_('grid.sort', 'COM_PLANTS_HEADING_ID', 'id', $listDirn, $listOrder); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_plants&task=plant.edit&id=' . $row->id);
				?>
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_EDIT_SHORTNAME'); ?>">
								<?php echo $row->short_name; ?>
							</a>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_EDIT_COMPANYNAME'); ?>">
								<?php echo $row->company_name; ?>
							</a>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_EDIT_EMAIL'); ?>">
								<?php echo $row->email; ?>
							</a>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_EDIT_TEL'); ?>">
								<?php echo $row->tel; ?>
							</a>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->published, $i, 'plants.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>"/>
	<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>"/>
	<?php echo JHtml::_('form.token'); ?>
</form>
