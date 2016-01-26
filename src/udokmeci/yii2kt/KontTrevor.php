<?php
namespace udokmeci\yii2kt;
use Yii;
use yii\helpers\ArrayHelper;

class KontTrevor extends \yii\base\Component
{

	const EVENT_INIT = 'init';
    static $componentName='kontTrevor';
	public $providers=[];
	public $blockClass='udokmeci\yii2kt\BaseBlock';

    public function init()
    {
        parent::init();
    	$this->trigger(static::EVENT_INIT);
    }

    public function addProviders(array $providers){
    	foreach ($providers as $key => $config) {
    		$this->providers[]=Yii::createObject(ArrayHelper::merge(['class'=>$this->blockClass],$config));
    	}
    }

    public function render($block){
    	$provider=$this->findProvider($block['type']);


    	return $this->findProvider($block['type'])->render($block['data']);
    }

    public function findProvider($type){
    	foreach ($this->providers as $key => $value) {
    		if(isset($value->type) && 
    			strtolower(str_replace(' ', '',$value->type))==
    			strtolower(str_replace(' ', '',$type))
    			)
    			return $value;
    	}
    	return null;
    }
}
