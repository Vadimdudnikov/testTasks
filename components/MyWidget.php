<?php 
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * MyWidget
 */
class MyWidget extends Widget
{
    public $message;
    
    /**
     * run
     *
     * @return void
     */
    public function run()
    {
        return $this->message; //вывод на экран переданного сообщения
    }
}
?>