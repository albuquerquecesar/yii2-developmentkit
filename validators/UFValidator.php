<?php

namespace chlabuquerque\devkit\validators;
/**
 * Description of UFValidator
 *
 * @author albuquerque
 */
class UFValidator extends \yii\validators\Validator {

    //put your code here
    private static $ufs = ['AC', 'AL', 'AM', 'AP', 'BA',
        'CE', 'DF', 'ES', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA',
        'PB', 'PE', 'PI', 'PR', 'RJ', 'RN', 'RO', 'RR', 'RS',
        'SC', 'SE'];

    /**
     *
     * @var boolean 
     */
    public $caseSensitive = false;

    public function validateAttribute($model, $attribute) {
        $uf = $model->$attribute;
        if (!$this->caseSensitive) {
            $uf = strtoupper($uf);
        }

        if (!isset(static::$ufs[$uf])) {
            $this->addError($model, $attribute, ' UF (Unidade Federativa) é inválida.');
            return false;
        }
        return true;
    }

}
