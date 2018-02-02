<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix width"<?php print $attributes; ?>>

  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>
</div>