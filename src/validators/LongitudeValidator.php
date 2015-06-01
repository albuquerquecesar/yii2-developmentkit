<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components\validators;

/**
 * Description of LongitudeValidator
 *
 * @author albuquerque
 */
class LongitudeValidator extends \yii\validators\Validator {

    public function validateAttribute($model, $attribute) {
        $longitude = $model->$attribute;
        if (!is_numeric($longitude) || $longitude > 180 || $longitude < -180) {
            $this->addError($model, $attribute, 'Longitude inválida!');
            return false;
        }
        return true;
    }

    public static function formartDecimal($longitude, $decimals = 12) {
        if (is_numeric($longitude)) {
            return number_format($longitude, $decimals);
        }
        return $longitude;
    }

}
