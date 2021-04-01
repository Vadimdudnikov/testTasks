
<?php
use app\components\MyWidget;
?>
<?= MyWidget::widget(['message' => $model->js]) ?>
<h1>default/view</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
