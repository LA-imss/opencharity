<?php foreach ($fields as $id => $field): ?>
    <?php if (!empty($field->separator)): ?>
    	<?php print $field->separator; ?>
    <?php endif; ?>
    <?php 
    if($id=='field_members_image'){$f1=$field->content;}
    ?>
<?php endforeach; ?>
<div class="our-members--slide">
    <?php print $f1; ?>
</div>