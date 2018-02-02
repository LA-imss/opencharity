<?php foreach ($fields as $id => $field): ?>
    <?php if (!empty($field->separator)): ?>
    	<?php print $field->separator; ?>
    <?php endif; ?>
    <?php 
    if($id=='field_social_icon'){$f1=$field->content;}
    ?>
<?php endforeach; ?>
<div class="social--link">
    <?php print $f1; ?>
</div>