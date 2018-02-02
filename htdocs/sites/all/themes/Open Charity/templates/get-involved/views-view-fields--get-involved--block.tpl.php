<?php foreach ($fields as $id => $field): ?>
	<?php if (!empty($field->separator)): ?>
		<?php print $field->separator; ?>
	<?php endif; ?>
	<?php 
	if($id=='field_group_image'){$f1=$field->content;}
	if($id=='title'){$f2=$field->content;}
	if($id=='field_group_description'){$f3=$field->content;}
	if($id=='field_group_registration'){$f4=$field->content;}
	?>
<?php endforeach; ?>
    <div class="get-involved--card">
    	<div class="get-involved--card--image">
    		<?php print $f1; ?>
    	</div>
    	<div class="get-involved--card--title">
    		<h3><?php print $f2; ?></h3>
    	</div>
    	<div class="get-involved--card--description">
    		<?php print $f3; ?>
    	</div>
    	<div class="get-involved--card--registration">
    		<?php print $f4; ?>
    	</div>
    </div>