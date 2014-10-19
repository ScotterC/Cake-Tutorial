<div class="page-header">
  <h1>
    Blog Posts
    <div class="pull-right">
      <?php
        echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-default'));
      ?>
    </div>
  </h1>
</div>
<table class="table">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Created</th>
    <th>Actions</th>
  </tr>

  <?php foreach ($posts as $post): ?>
  <tr>
    <td>
      <?php echo $post['Post']['id']; ?>
    </td>
    <td>
      <?php
        echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));
      ?>
    </td>
    <td>
      <?php echo $post["Post"]["created"]; ?>
    </td>
    <td>
      <div class="btn-group">
        <?php
          echo $this->Html->link("Edit", array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']), array('class' => 'btn btn-default btn-small'));
          echo $this->Form->postLink("Delete", array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-danger btn-small', 'confirm' => 'Are you sure?'));
        ?>
      </div>
    </td>
  </tr>
  <?php endforeach ?>
  <?php unset($post); ?>
</table>