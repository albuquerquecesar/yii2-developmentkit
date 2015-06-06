<?php


namespace chlabuquerque\yii2kitdevelopment\widgets;

/**
 * Description of Cnpj
 *
 * @author albuquerque
 */
class Cnpj extends \yii\widgets\MaskedInput{
    //put your code here

    public function init() {
        $this->mask=['99.999.999/9999-99'];
        parent::init();
    }

    public function run() {
        return parent::run();
    }

}
