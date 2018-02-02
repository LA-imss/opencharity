<section class="section copyright">
    <?php if ($view->get_title()!= ''): ?>
		<div class="section--title"><h2><?php print $view->get_title(); ?></h2></div>
	<?php endif; ?>
	<?php print $view->get_title(); ?>
	<?php if ($rows): ?>
		<?php print $rows; ?>
	<?php endif; ?>
</section>