<?php
namespace udokmeci\yii2kt;
use yii\base\Object;
use yii\base\InvalidConfigException;
use \Mustache_Engine;

class BaseBlock extends Object
{
	public $title;
	public $type;
	public $image;
	public $templateObject;
	public $template;
	public $templateFile;

	public function init(){
		parent::init();
		if(!isset($this->type) || !$this->type){
			throw new InvalidConfigException("Type is required for block identification", 1);
		}

		// unknown block not found issue from sir-trevor
		$this->type=ucfirst(str_replace(' ', '',$this->type));
	}

	public function render($data){
		return (new Mustache_Engine)->render($this->template,$data);
	}
}