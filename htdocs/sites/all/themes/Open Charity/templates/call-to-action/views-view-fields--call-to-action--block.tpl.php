<?php foreach ($fields as $id => $field): ?>
	<?php if (!empty($field->separator)): ?>
		<?php print $field->separator; ?>
	<?php endif; ?>
	<?php 
	if($id=='field_company_cta'){$f1=$field->content;}
	?>
<?php endforeach; ?>
<?php print $f1; ?>