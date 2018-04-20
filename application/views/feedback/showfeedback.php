<div class="text-center">
    <p>Обратная связь</p>
</div>
<?php
foreach ($feedback as $key=>$text):?>
<div class="text-center list-group-item-info">
    <p><?php echo $text['name'] ?></p>
    <p><?php echo $text['email'] ?></p>
    <p><?php echo $text['text'] ?></p>
    <hr>
</div>
<?php endforeach; ?>
