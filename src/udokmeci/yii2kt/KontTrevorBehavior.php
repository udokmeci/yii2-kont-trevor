<?php 
namespace udokmeci\yii2kt;

use yii\behaviors\AttributeBehavior;
use yii\db\BaseActiveRecord;
use udokmeci\yii2kt\Parser;

class KontTrevorBehavior extends AttributeBehavior
{
    public $htmlAttribute;
    public $attribute;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (empty($this->attributes)) {
            $this->attributes = [BaseActiveRecord::EVENT_BEFORE_VALIDATE => $this->htmlAttribute];
        }

        if ($this->attribute === null && $this->value === null) {
            throw new InvalidConfigException('Either "attribute" or "value" property must be specified.');
        }
    }

    /**
     * @inheritdoc
     */
    protected function getValue($event)
    {
        if ($this->attribute !== null) {
            if ($this->shouldGenerateHtml()) {
                $html = $this->generateHtml($this->owner->{$this->attribute});
            } else {
                return $this->owner->{$this->htmlAttribute};
            }
        } else {
            $html = parent::getValue($event);
        }

        return $html;
    }

    /**
     * This method is called by [[getValue]] to generate the HTML content from KontTrevor JSON.
     * @param array $kontTrevorJSON an array of blocks that will be used to generate html.
     * @return string the conversion result.
     */
    protected function generateHtml($kontTrevorJSON)
    {
        $convertor = new Parser();
        return $convertor->toHtml($kontTrevorJSON);
    }

    public function renderKontTrevor(){
        return $this->getValue(null);
    }

    /**
     * Checks whether the new slug generation is needed
     * This method is called by [[getValue]] to check whether the new slug generation is needed.
     * You may override it to customize checking.
     * @return boolean
     * @since 2.0.7
     */
    protected function shouldGenerateHtml()
    {
        if (!$this->owner->hasAttribute($this->htmlAttribute)) {
            return true;
        }

        if (empty($this->owner->{$this->htmlAttribute})) {
            return true;
        }
        if ($this->immutable) {
            return false;
        }
        if ($this->owner->isAttributeChanged($this->attribute)){
            return true;
        }
        return false;
    }
}