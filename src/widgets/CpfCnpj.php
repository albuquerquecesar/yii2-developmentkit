<?php

namespace chlabuquerque\yii2kitdevelopment\widgets;
/**
 * Description of CpfCnpj
 *
 * @author albuquerque
 */
class CpfCnpj extends \yii\widgets\MaskedInput{
    //put your code here

    public function init() {
        $this->mask=['999.999.999-99', '99.999.999/9999-99'];
        parent::init();
    }

    public function run() {
        return parent::run();
    }

}
