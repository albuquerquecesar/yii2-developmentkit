<?php

namespace chlabuquerque\devkit\validators;

/**
 * Description of CepValidator
 *
 * @author albuquerque
 */
class CepValidator extends \yii\validators\Validator {
    //put your code here
    
    public function validateAttribute($model, $attribute) {
       $cep= self::removeFormat($model->$attribute);
       if (empty($cep) || strlen($cep)!= 8 || !is_numeric($cep)){
           $this->addError($model, $attribute, 'CEP é inválido');
           return false;
       }
       return true;
    }
    
    public static function removeFormat($cep) {
        return  str_replace('-', '', $cep);
    }

}
