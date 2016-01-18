<?php
namespace udokmeci\yii2kt;
use kato\sirtrevorjs\SirTrevorConverter;

class Parser extends SirTrevorConverter
{
    /*
    @Override
    */
    public function toHtml($json)
    {
        // convert the json to an associative array
        $input = json_decode($json, true);
        $html = null;

        if (!empty($input) && is_array($input)) {
            // loop trough the data blocks
            foreach ($input['data'] as $block) {
                // no data, problem
                if (!isset($block['data'])) {
                    break;
                }

                // check if we have a converter for this type
                $converter = $block['type'] . 'ToHtml';
                if ($block['type'] == "redactor") {
                    $html .= $this->redactorRender($block['data']);
                } elseif (is_callable(array($this, $converter))) {
                    // call the function and add the data as parameters
                    $html .= call_user_func_array(
                        array($this, $converter),
                        $block['data']
                    );
                } elseif ($block['type'] == "textimage") {
                    $html .= $this->renderTextImage($block['data']);
                } elseif ($block['type'] == "headingtext") {
                    $html .= $this->renderHeadingText($block['data']);
                } elseif ($block['type'] == "tweet") {
                    // special twitter
                    $html .= $this->twitterToHtml($block['data']);
                } elseif (array_key_exists('text', $block['data'])) {
                    // we have a text block. Let's just try the default converter
                    $html .= $this->defaultToHtml($block['data']['text']);
                } else {
                    
                    $html .= $this->mustacheToHtml($block);
                }



            }

            // code js
            if ($this->codejs != null && is_array($this->codejs)) {
                foreach ($this->codejs as $arr) {
                    $html .= $arr;
                }
            }
        }

        return $html;
    }

    public function mustacheToHtml($block){

        return  \Yii::$app->{KontTrevor::$componentName}->render($block);
    }

}