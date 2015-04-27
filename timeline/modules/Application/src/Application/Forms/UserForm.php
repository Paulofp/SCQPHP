<?php

include (APPLICATION_PATH."/src/Application/Model/dbtimeline/getTransports.php");
//include (VENDOR_PATH."/acl/Core/src/Core/Forms/readFields.php");

$transports = getTransports($config);

return array(
    'id'=>array(
        'type'=>'hidden',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('required'=>true)
    ),
    'headline'=>array(
        'label'=>'Head Line',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1)
    ),
    'text'=>array(
        'label'=>'Text',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1)
    ),
   
   
    'media'=>array(
        'label'=>'Media',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1)
    ),
    'mediacredit'=>array(
        'label'=>'Media Credit',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1)
   
    ),
    'mediacaption'=>array(
        'label'=>'Media Caption',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1)
         
    ),
    'mediathumbnail'=>array(
        'label'=>'Media Thumbnail',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1)
         
    ),
    
    'tipe'=>array(
        'label'=>'Tipe',
        'type'=>'select',
        'options'=>array('Title'=>'title',
            'Era' =>'era'),
        'validators'=>array('inArray'=>true)
    ),
    'tag'=>array(
        'label'=>'Tag',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1)
         
    ),
    'submit'=>array(
        'label'=>'Enviar',
        'type'=>'submit'
    ),
    
    
);