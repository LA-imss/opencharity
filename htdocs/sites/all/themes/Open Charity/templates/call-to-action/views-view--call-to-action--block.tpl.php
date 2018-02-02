<section class="section call-to-action">
	<div class="width">
		<div class="call-to-action--content">
			<?php if ($view->get_title()!= ''): ?>
				<div class="section--title"><h2><?php print $view->get_title(); ?></h2></div>
			<?php endif; ?>
			<?php if ($rows): ?>
				<?php print $rows; ?>
			<?php endif; ?>
		</div>
	</div>
</section>