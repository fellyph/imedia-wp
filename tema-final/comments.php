<div class="comments-area">
  <?php if(have_comments()): ?>
    <h3 class="title"><?php comments_number('Comente!', '1 Comentário', '% Comentários'); ?></h3>
    <ol class="comments">
      <?php wp_list_comments(array('style' => 'ol')); ?>
    </ol>
  <?php endif; ?>

  <?php comment_form(); ?>
</div>
