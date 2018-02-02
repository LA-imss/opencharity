<section class="section next-event">
	<div class="width">
	    <?php if ($view->get_title()!= ''): ?>
			<div class="section--title"><h2><?php print $view->get_title(); ?></h2></div>
		<?php endif; ?>
		<?php if ($rows): ?>
			<?php print $rows; ?>
		<?php endif; ?>
	</div>
</section>