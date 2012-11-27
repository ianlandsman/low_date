<?php
namespace Blocks;

class LowDate_DateBlockType extends BaseBlockType
{
	/**
	 * Block type name
	 */
	public function getName()
	{
		return Blocks::t('Low Date');
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
		if (empty($value)) $value = new DateTime;

		return blx()->templates->render('lowdate/input', array(
			'name'       => $name,
			'dateValue'  => $value->format('Y-m-d')
		));
	}

	/**
	 * Change datestring to timestamp
	 */
	protected function prepPostData($value)
	{
		return strtotime($value);
	}

}