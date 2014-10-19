<div class="page-header">
  <h1>
    <?php echo h($post['Post']['title']); ?>
    <small>
      <?php echo $post["Post"]["created"]; ?>
    </small>
  </h1>
</div>

<p class="lead">
  <?php echo h($post["Post"]["body"]); ?>
</p>