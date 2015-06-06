<?php

namespace chlabuquerque\devkit\widgets;
/**
 * Description of Telefone
 *
 * @author albuquerque
 */
class Telefone extends \yii\widgets\MaskedInput{
    //put your code here

    public function init() {
        $this->mask=['(99) 9999-9999', '(99) 99999-9999'];
        parent::init();
    }

    public function run() {
        return parent::run();
    }

}
