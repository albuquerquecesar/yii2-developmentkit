<?php


namespace chlabuquerque\yii2kitdevelopment\validators;

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
