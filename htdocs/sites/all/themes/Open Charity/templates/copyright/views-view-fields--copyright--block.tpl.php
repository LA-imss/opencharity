<?php foreach ($fields as $id => $field): ?>
    <?php if (!empty($field->separator)): ?>
    	<?php print $field->separator; ?>
    <?php endif; ?>
    <?php 
    if($id=='field_company_copyright'){$f1=$field->content;}
    ?>
<?php endforeach; ?>
<div class="copyright--text">
    <?php print $f1; ?>
</div>