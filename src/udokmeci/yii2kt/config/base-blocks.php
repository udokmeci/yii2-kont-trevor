<?php
return [
    [
        'title' => "Heading and Paragraph",
        'type' => "Headex",
        'image' => 'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Headex.jpeg',
        'templateObject' => [
            'h2_1' => 'Title Goes Here',
            'subtext_1' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template' => <<<MST
<div class="row">
<div class="col-md-12">
<h2 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{{h2_1}}}</h2>
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</div>
</div>
</div>
MST
    ],
    [
        'title'=>"Image On Left",
        'type'=>"Imageleft",
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Imageleft.jpeg',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'http://placehold.it/550x350',
            ],
            'h2_1'=>'Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<h2 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{{h2_1}}}</h2>
</div>
<div class="col-md-6">
<img class="img-responsive center-block" src="{{img_1.url}}"  alt="{{h2_1_textOnly}}" title="{{h2_1_textOnly}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="550" data-key="img_1"/>
</div>
<div class="col-md-6">
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>"Image On Top",
        'type'=>"Imagetop",
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Imagetop.jpeg',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'http://placehold.it/1050x450',
            ],
            'h2_1'=>'Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<h2 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{{h2_1}}}</h2>
</div>
<div class="col-md-12">
<img class="img-responsive center-block" src="{{img_1.url}}"  alt="{{h2_1_textOnly}}" title="{{h2_1_textOnly}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="1076" data-key="img_1"/>
</div>
<div class="col-md-12">
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>"Image On Right",
        'type'=>"Imageright",
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Imageright.jpeg',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'http://placehold.it/550x350',
            ],

            'h2_1'=>'Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<h2 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{{h2_1}}}</h2>
</div>
<div class="col-md-6">
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
<div class="col-md-6">
<img class="img-responsive center-block" src="{{img_1.url}}"  alt="{{h2_1_textOnly}}" title="{{h2_1_textOnly}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="550" data-key="img_1"/>
</div>
</div>
MST
    ],
    [
        'title'=>'Two Columns',
        'type'=>'Twocolumns',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Twocolumns.jpeg',
        'templateObject'=>[
            'h3_1'=>'First Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'h3_2'=>'Second Title Goes Here',
            'subtext_2'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-6">
<h3 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h3_1" >{{{h3_1}}}</h3>
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
<div class="col-md-6">
<h3 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h3_2" >{{{h3_2}}}</h3>
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_2" >{{{subtext_2}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>'Three Columns',
        'type'=>'Threecolumns',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Threecolumns.jpeg',
        'templateObject'=>[
            'h3_1'=>'First Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'h3_2'=>'Second Title Goes Here',
            'subtext_2'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'h3_3'=>'Third Title Goes Here',
            'subtext_3'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-4">
<h3 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h3_1" >{{{h3_1}}}</h3>
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
<div class="col-md-4">
<h3 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h3_2" >{{{h3_2}}}</h3>
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_2" >{{{subtext_2}}}</p>
</div>
<div class="col-md-4">
<h3 class=" header1" data-st-part="data" data-role="editable-subblock" data-key="h3_3" >{{{h3_3}}}</h3>
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_3" >{{{subtext_3}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>'Text Block',
        'type'=>'Textblock',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Textblock.jpeg',
        'templateObject'=>[
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<p class="" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>

</div>
MST
    ],
    [
        'title'=>'Horizontal Line',
        'type'=>'Hr',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Hr.jpeg',
        'template'=><<<MST
<hr class="horizontal" />
MST
    ],
    [
        'title'=>'Lead Paragraph',
        'type'=>'Leadparagraph',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Leadparagraph.jpeg',
        'templateObject'=>[
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<p class="lead" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
MST
    ],
    [
        'title'=>'Qoute',
        'type'=>'Qoute',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Qoute.jpeg',
        'templateObject'=>[
            'title'=>'Someone famous in',
            'position'=>'Source Title',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<blockquote>
    <div>
        <p class="lead" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
    </div>
    <footer>
        <span  data-st-part="data" data-role="editable-subblock"  data-key="title" >{{{title}}}</span>
    @ <cite data-st-part="data" data-role="editable-subblock"  data-key="position" title="{{position}}"" >{{{position}}}</cite>
    </footer>
</blockquote>


MST
    ],
    [
        'title'=>'Qoute With Image',
        'type'=>'Qoutewithimage',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Qoutewithimage.jpeg',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'http://placehold.it/150x150',
            ],
            'title'=>'Someone famous in',
            'position'=>'Source Title',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
        <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-responsive img-circle center-block" src="{{img_1.url}}"  alt="{{title_textOnly}}" title="{{title_textOnly}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="550" data-key="img_1"/>
                </div>
                <div class="col-sm-9">
                   <div>
                    <p class="lead" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
                    </div>
                    <footer>
                    <span  data-st-part="data" data-role="editable-subblock"  data-key="title" >{{{title}}}</span>
                    @ <cite data-st-part="data" data-role="editable-subblock"  data-key="position" title="{{position}}"" >{{{position}}}</cite>
                    </footer>
                </div>
              </div>
            </blockquote>
MST
    ],
    [
        'title'=>'Image with caption',
        'type'=>'Imagewithcaption',
        'image'=>'https://raw.githubusercontent.com/udokmeci/yii2-kont-trevor/master/src/udokmeci/yii2kt/cst-files/images/Imagewithcaption.jpeg',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'http://placehold.it/750x400',
            ],
            'caption_1'=>'A caption for the above image.',
        ],
        'template'=><<<MST
<figure class="figure">
  <img class="img-responsive center-block" src="{{img_1.url}}"  alt="{{caption_1_textOnly}}" title="{{caption_1_textOnly}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="750" data-key="img_1"/>
  <figcaption class="figure-caption" data-st-part="data" data-role="editable-subblock"  data-key="caption_1" >{{{caption_1}}}</figcaption>
</figure>
MST
    ],
];
