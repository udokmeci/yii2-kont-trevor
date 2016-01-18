<?php
return [
    [
        'title' => "Heading and Paragraph",
        'type' => "Headex",
        'image' => '/img/sir-trevor/headex.png',
        'templateObject' => [
            'h2_1' => 'Title Goes Here',
            'subtext_1' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template' => <<<MST
<div class="row">
<div class="col-md-12">
<h2 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{h2_1}}</h2>
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</div>
</div>
</div>
MST
    ],
    [
        'title'=>"Image On Left",
        'type'=>"Imageleft",
        'image'=>'/img/sir-trevor/imageLeft.png',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'https://s3-eu-west-1.amazonaws.com/yukumvar/upload/0aNk9D.',
            ],
            'h2_1'=>'Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<h2 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{h2_1}}</h2>
</div>
<div class="col-md-6">
<img class="img-responsive center-block" src="{{img_1.url}}"  alt="{{h2_1}}" title="{{h2_1}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="550" data-key="img_1"/>
</div>
<div class="col-md-6">
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>"Image On Top",
        'type'=>"Imagetop",
        'image'=>'/img/sir-trevor/imageLeft.png',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'https://s3-eu-west-1.amazonaws.com/yukumvar/upload/0aNk9D.',
            ],
            'h2_1'=>'Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<h2 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{h2_1}}</h2>
</div>
<div class="col-md-12">
<img class="img-responsive center-block" src="{{img_1.url}}"  alt="{{h2_1}}" title="{{h2_1}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="1076" data-key="img_1"/>
</div>
<div class="col-md-12">
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>"Image On Right",
        'type'=>"Imageright",
        'image'=>'/img/sir-trevor/imageLeft.png',
        'templateObject'=>[
            'img_1'=>[
                'url'=>'https://s3-eu-west-1.amazonaws.com/yukumvar/upload/0aNk9D.',
            ],

            'h2_1'=>'Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<h2 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h2_1" >{{h2_1}}</h2>
</div>
<div class="col-md-6">
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
<div class="col-md-6">
<img class="img-responsive center-block" src="{{img_1.url}}"  alt="{{h2_1}}" title="{{h2_1}}" data-width="{{img_1.width}}" data-height='{{img_1.height}}' width="{{img_1.width}}" height='{{img_1.height}}'data-id="{{img_1.id}}" data-st-part="data" data-role="editable-image" data-max-width="550" data-key="img_1"/>
</div>
</div>
MST
    ],
    [
        'title'=>'Two Columns',
        'type'=>'Twocolumns',
        'image'=>'/img/sir-trevor/imageLeft.png',
        'templateObject'=>[
            'h3_1'=>'First Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'h3_2'=>'Second Title Goes Here',
            'subtext_2'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-6">
<h3 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h3_1" >{{3_1}}</h3>
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
<div class="col-md-6">
<h3 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h3_2" >{{3_2}}</h3>
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_2" >{{{subtext_2}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>'Three Columns',
        'type'=>'Threecolumns',
        'image'=>'/img/sir-trevor/imageLeft.png',
        'templateObject'=>[
            'h3_1'=>'First Title Goes Here',
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'h3_2'=>'Second Title Goes Here',
            'subtext_2'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'h3_3'=>'Second Title Goes Here',
            'subtext_3'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-4">
<h3 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h3_1" >{{3_1}}</h3>
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>
<div class="col-md-4">
<h3 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h3_2" >{{3_2}}</h3>
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_2" >{{{subtext_2}}}</p>
</div>
<div class="col-md-4">
<h3 class="st-required header1" data-st-part="data" data-role="editable-subblock" data-key="h3_3" >{{3_3}}</h3>
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_3" >{{{subtext_3}}}</p>
</div>
</div>
MST
    ],
    [
        'title'=>'Text Block',
        'type'=>'Textblock',
        'image'=>'/img/sir-trevor/imageLeft.png',
        'templateObject'=>[
            'subtext_1'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ],
        'template'=><<<MST
<div class="row">
<div class="col-md-12">
<p class="st-required" data-st-part="data" data-role="editable-subblock"  data-key="subtext_1" >{{{subtext_1}}}</p>
</div>

</div>
MST
    ],
    [
        'title'=>'Horizontal Line',
        'type'=>'Hr',
        'image'=>'/img/sir-trevor/imageLeft.png',
        'template'=><<<MST
<hr class="horizontal" />
MST
    ],
];
