<?php

namespace chlabuquerque\devkit\validators;


/**
 * Description of TelefoneValidator
 *
 * @author albuquerque
 */
class TelefoneValidator extends \yii\validators\Validator{
    //put your code here
    
    public function validateAttribute($model, $attribute) {
        $fone=  self::removeFormat($model->$attribute) ;
        if (empty($fone) || strlen($fone)< 10 || strlen($fone) > 11 || !is_numeric($fone)){
            $this->addError($model, $attribute, 'Telefone inválido');
            return false;
        }
        return true;
    }

    
    public static function removeFormat($telefone) {
        return  str_replace(['-', ' ', '(', ')'], '', $telefone) ;
    }
}
