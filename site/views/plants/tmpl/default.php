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
JHtml::_('formbehavior.chosen', 'select');
$listOrder     = $this->escape($this->filter_order);
$listDirn      = $this->escape($this->filter_order_Dir);
?>
<form action="index.php?option=com_plants&view=plants" method="post" id="adminForm" name="adminForm">
	<div class="row-fluid">
		<h3><?php echo JText::_('COM_PLANTS_PLANTS_LIST'); ?> <small>(<?php echo count($this->items) ?>)</small></h3>

		<table class="table table-striped table-hover">
			<thead>
			<tr>
				<th width="1%"><?php echo JText::_('COM_PLANTS_PLANTS_NUM'); ?></th>

				<th width="30%">
					<?php echo JHtml::_('grid.sort', 'COM_PLANTS_PLANTS_SHORT_NAME', 'short_name', $listDirn, $listOrder); ?>
				</th>
				<th width="20%">
					<?php echo JHtml::_('grid.sort', 'COM_PLANTS_PLANTS_COMPANY_NAME', 'company_name', $listDirn, $listOrder); ?>
				</th>
				<th width="29%">
					<?php echo JHtml::_('grid.sort', 'COM_PLANTS_PLANTS_TEL', 'tel', $listDirn, $listOrder); ?>
				</th>
				<th width="20%">
					<?php echo JHtml::_('grid.sort', 'COM_PLANTS_PLANTS_EMAIL', 'email', $listDirn, $listOrder); ?>
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
						$link = JRoute::_('index.php?option=com_plants&view=plant&id=' . $row->id);
					?>

						<tr>
							<td>
								<?php echo $this->pagination->getRowOffset($i); ?>
							</td>

							<td>
								<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_PLANTS_EDIT_ITEM'); ?>">
									<?php echo $row->short_name; ?>
								</a>
							</td>
							<td>
								<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_PLANTS_EDIT_ITEM'); ?>">
									<?php echo $row->company_name; ?>
								</a>
							</td>
							<td>
								<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_PLANTS_EDIT_ITEM'); ?>">
									<?php echo $row->tel; ?>
								</a>
							</td>
							<td>
								<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_PLANTS_PLANTS_EDIT_ITEM'); ?>">
									<?php echo $row->email; ?>
								</a>
							</td>

						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>"/>
	<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>"/>
	<?php echo JHtml::_('form.token'); ?>
</form>