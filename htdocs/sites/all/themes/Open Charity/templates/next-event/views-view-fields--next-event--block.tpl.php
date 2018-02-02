<?php foreach ($fields as $id => $field): ?>
    <?php if (!empty($field->separator)): ?>
    	<?php print $field->separator; ?>
    <?php endif; ?>
    <?php 
    if($id=='field_event_date'){$f1=$field->content;}
    if($id=='field_event_place'){$f2=$field->content;}
    if($id=='field_event_registration'){$f3=$field->content;}
    ?>
<?php endforeach; ?>
<div class="next-event--description">
    <div class="next-event--desctiprion--event-date">
        <?php print $f1; ?>
    </div>
    <div class="next-event--desctiprion--event-place">
        <?php print $f2; ?>
    </div>
</div>
<div class="next-event--registration">
    <div class="next-event--desctiprion--event-registration">
        <?php print $f3; ?>
    </div>
</div>