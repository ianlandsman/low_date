<?php
namespace Craft;

class Low_date_DateFieldType extends BaseFieldType
{
	/**
	 * The default date format
	 */
	private $_defaultFormat = 'Y-m-d';

	/**
	 * Block type name
	 */
	public function getName()
	{
		return Craft::t('Low Date');
	}

	/**
	 * Save it as datetime
	 */
	public function defineContentAttribute()
	{
		return AttributeType::DateTime;
	}

	/**
	 * Show date field
	 */
	public function getInputHtml($name, $value)
	{
		if (is_object($value))
		{
			$date = $value;
		}
		elseif (is_string($value))
		{
			$date = new DateTime($value);
		}
		else
		{
			$date = new DateTime();
		}

		return craft()->templates->render('low_date/input', array(
			'name'       => $name,
			'inputId'    => str_replace(array('[', ']'), array('-', ''), $name),
			'dateValue'  => $date->format($this->_defaultFormat)
		));
	}

	/**
	 * Change datestring to DateTime object
	 */
	protected function prepPostData($value)
	{
		return new DateTime($value);
	}

}