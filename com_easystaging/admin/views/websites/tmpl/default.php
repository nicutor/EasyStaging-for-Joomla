<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

?>

<form action="<?php echo JRoute::_('index.php?option=com_easystaging&view=websites');?>" method="post" name="adminForm" id="adminForm">
	<?php if (!empty( $this->sidebar)) : ?>
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
    <?php else : ?>
	<div id="j-main-container">
    <?php endif;?>
        <?php // Search tools bar
        echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>
        <div id="editdiv" class="span12">
                <table class="adminlist table table-striped">
                    <thead><?php echo $this->loadTemplate('head');?></thead>
                    <tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
                    <tbody><?php echo $this->loadTemplate('body');?></tbody>
                </table>
                <caption><?php echo $this->pagination->getListFooter(); ?></caption>
        </div>
        <div id="es_version">
            <p><?php echo JText::sprintf('COM_EASYSTAGING_CURRENT_VERSION', $this->current_version); ?></p>
        </div>
    </div>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order" value="" />
    <input type="hidden" name="filter_order_Dir" value="" />
    <?php echo JHtml::_('form.token'); ?>
</form>