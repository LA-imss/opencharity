<section class="section blog">
	<div class="width">
	    <?php if ($view->get_title()!= ''): ?>
			<div class="section--title"><h2><?php print $view->get_title(); ?></h2></div>
		<?php endif; ?>
		<?php if ($rows): ?>
			<div class="blog--content">
				<?php print $rows; ?>
			</div>
		<?php endif; ?>
	</div>
</section>