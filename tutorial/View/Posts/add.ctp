<div class="page-header">
  <h1>Add Post</h1>
</div>

<?php echo $this->Form->create('Post'); ?>
<div class="form-group">
  <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
</div>
<div class="form-group">
  <?php echo $this->Form->input('body', array('rows' => '3', 'class' => 'form-control')); ?>
</div>
<div class="btn-group pull-right">
  <?php
    echo $this->Html->link('Cancel', array('controller' => 'posts', 'action' => 'index'), array('class' => 'btn btn-default'));

    echo $this->Form->submit('Save Post', array('div' => false, "class" => "btn btn-primary"));
  ?>
</div>