<?php echo $this->Form->create('Deal', array('type' => 'file', 'action' => 'save')); ?>
<?php echo $this->Form->input('Deal.desc'); ?>
<?php echo $this->Form->input('Deal.user_id'); ?>
<?php echo $this->Form->input('Deal.image', array('type' => 'file')); ?>
<?php echo $this->Form->end(__('Add')); ?>