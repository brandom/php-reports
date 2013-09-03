<?php
class enumFilter extends FilterBase {	
	public static function filter($value, $options = array(), &$report, &$row) {

		$key = $value->getValue();

		if (array_key_exists($key, $options)) {
			$val = $options[$key];
		}
		else {
			$val = $key;
		}

		$value->setValue($val);
		
		return $value;
	}

}
