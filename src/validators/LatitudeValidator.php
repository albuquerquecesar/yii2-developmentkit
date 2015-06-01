<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components\validators;

/**
 * Description of LatitudeValidate
 *
 * @author albuquerque
 */
class LatitudeValidator extends \yii\validators\Validator {

    //put your code here

    public function validateAttribute($model, $attribute) {
        $latitude = $model->$attribute;
        if (!is_numeric($latitude) || $latitude > 90 || $latitude < -90) {
            $this->addError($model, $attribute, 'Latitude inválida!');
            return false;
        }
        return true;
    }

    public static function formartDecimal($latitude, $decimals = 12) {
        if (is_numeric($latitude)) {
            return number_format($latitude, $decimals);
        }
        return $latitude;
    }

}
