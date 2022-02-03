<?php

// This recordset is for the THUMBNAILS GALLERY page

$content = array (  // an array is a set of related information. Ex: multiple pieces of info about one photo
                    // $content is the "parent" array, as it holds several other arrays

array (   // the first array inside "content":: child array #1
		'id'                => "1",
    'metatitle'         => "Lamb",
    'metadescription'   => "Lamb at Quinn Farm",
		'h1title'           => "Lamb at Quinn Farm",
		'imagepath'         => "/img/thumbs/michakis-alex-001-05.jpg",
		'caption'           => "Newborn lamb at Quinn Farm in Notre-Dame-de-l'Île-Perrot",
    'copyright'         => "&copy Alex Michakis, 2019"),  // last line ends with a ),

  array (  // the second array inside "content": child array #2
      'id'                => "2",
      'metatitle'         => "Daffodil",
      'metadescription'   => "White daffodil",
      'h1title'           => "White daffodil",
      'imagepath'         => "/img/thumbs/michakis-alex-001-21.jpg",
      'caption'           => "White daffodil located in L'Ile-Bizard",
      'copyright'         => "&copy Alex Michakis, 2020"),

    array (  // the third array inside "content": child array #3
      'id'                => "3",
      'metatitle'         => "Red Roof House",
      'metadescription'   => "Red roof house in La Conception",
      'h1title'           => "Red roof house in La Conception",
      'imagepath'         => "/img/thumbs/IMG_0125.jpg",
      'caption'           => "Red roof house in La Conception, Québec",
      'copyright'         => "&copy Alex Michakis, 2021"),    

      array (  // the third array inside "content": child array #3
        'id'                => "4",
        'metatitle'         => "Citronella Flower",
        'metadescription'   => "Citronella flower in L'Ile-Bizard",
        'h1title'           => "Citronella flower in L'Ile-Bizard",
        'imagepath'         => "/img/thumbs/michakis-alex-001-23.jpg",
        'caption'           => "Citronella flower in L'Ile-Bizard, Québec",
        'copyright'         => "&copy Alex Michakis, 2020"), 
        
        array (  // the third array inside "content": child array #3
          'id'                => "5",
          'metatitle'         => "Boardwalk",
          'metadescription'   => "Boardwalk in Gore, Quebec",
          'h1title'           => "Boardwalk in Gore, Quebec",
          'imagepath'         => "/img/thumbs/michakis-alex-001-28.jpg",
          'caption'           => "Boardwalk and lake in Gore, Quebec",
          'copyright'         => "&copy Alex Michakis, 2020"), 

          array (  // the third array inside "content": child array #3
            'id'                => "5",
            'metatitle'         => "Boardwalk",
            'metadescription'   => "Boardwalk in Gore, Quebec",
            'h1title'           => "Boardwalk in Gore, Quebec",
            'imagepath'         => "/img/thumbs/michakis-alex-001-28.jpg",
            'caption'           => "Boardwalk and lake in Gore, Quebec",
            'copyright'         => "&copy Alex Michakis, 2020"), 

            array (  // the third array inside "content": child array #3
              'id'                => "6",
              'metatitle'         => "Forget-Me-Not",
              'metadescription'   => "Forget-Me-Not in Gore, Quebec",
              'h1title'           => "Forget-Me-Not in Gore, Quebec",
              'imagepath'         => "/img/thumbs/michakis-alex-001-27",
              'caption'           => "Forget-Me-Not in Gore, Quebec",
              'copyright'         => "&copy Alex Michakis, 2020"), 
  // You can add as many arrays as you want thumbnails on the gallery page    

);  // last line closes the parent $content array
?>