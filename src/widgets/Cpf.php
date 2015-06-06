<?php

namespace chlabuquerque\yii2kitdevelopment\widgets;

/**
 * Description of Cpf
 *
 * @author albuquerque
 */
class Cpf extends \yii\widgets\MaskedInput{
    //put your code here

    public function init() {
        $this->mask=['999.999.999-99'];
        parent::init();
    }

    public function run() {
        return parent::run();
    }

}
