<?php foreach ($fields as $id => $field): ?>
	<?php if (!empty($field->separator)): ?>
		<?php print $field->separator; ?>
	<?php endif; ?>
	<?php 
	if($id=='field_mission_image'){$f1=$field->content;}
	if($id=='title'){$f2=$field->content;}
	if($id=='field_mission_description'){$f3=$field->content;}
	?>
<?php endforeach; ?>
<div class="our-mission--card">
	<div class="our-mission--card--image">
		<?php print $f1; ?>
	</div>
	<div class="our-mission--card--title">
		<h4><?php print $f2; ?></h4>
	</div>
	<div class="our-mission--card--description">
		<?php print $f3; ?>
	</div>
</div>