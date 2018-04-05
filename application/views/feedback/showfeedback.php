<p>Обратная связь</p>
<?php
foreach ($feedback as $key=>$text):?>
    <p><?php echo $text['name'] ?></p>
    <p><?php echo $text['email'] ?></p>
    <p><?php echo $text['text'] ?></p>
    <hr>
<?php endforeach; ?>
