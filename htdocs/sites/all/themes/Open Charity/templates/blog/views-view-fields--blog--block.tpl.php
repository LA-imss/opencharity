<?php foreach ($fields as $id => $field): ?>
    <?php if (!empty($field->separator)): ?>
    	<?php print $field->separator; ?>
    <?php endif; ?>
    <?php 
    if($id=='title'){$f1=$field->content;}
    if($id=='field_blog_post_body'){$f2=$field->content;}
    if($id=='field_blog_post_date'){$f3=$field->content;}
    ?>
<?php endforeach; ?>
<div class="blog--post">
    <div class="blog--post--title">
        <h5><?php print $f1; ?></h5>
    </div>
    <div class="blog--post--body">
        <?php print $f2; ?>
    </div>
    <div class="blog--post--date">
        <?php print $f3; ?>
    </div>
</div>