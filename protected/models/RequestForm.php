<?php

/**
 * RequestForm class.
 * RequestForm is the data structure for keeping
 */
class RequestForm extends CFormModel
{
	public $area;
	public $price;
	public $workstations;
	public $industry;
	public $mobile;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('area, price, workstations, industry, mobile', 'required'),
			array('mobile', 'numerical'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'area'=>'目标商圈',
			'price'=>'租金范围',
			'workstations'=>'工位数量',
			'industry'=>'所属行业',
			'mobile'=>'手机号码'
		);
	}
}