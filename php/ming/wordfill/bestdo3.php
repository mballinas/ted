<?
  
  $font="../../../fonts/_sans.fdb";

  $f = new SWFFont($font);
 
  include "../ming_functions.php";

  $m = createnewswf(1.0,176,208,0xFF,0xFF,0xFF);

  $z = array();

  $button = array();

  array_push($z,placetext("If we look back at most languages, the most common greeting is...",$m,5,0,0x00,0x00,0x00,160,50,13));

  $i = $m->add(basic_input_background(5,65,15,30,0x00,0x00,0x00));

  array_push($z,$i);    

  array_push($z,placeinputtext($m,5,65,0x00,0x00,0x00,30,160,13,"inputtext",$f));

  $material = button("answer=inputtext; play();",5,180,170,20,"Check your answer",0xFF,0xFF,0xFF,0x00,0x00,0x00,13,$m,160);

  array_push($button,$material[0]);
  array_push($button,$material[1]); 
  
  add_actionscript($m,"stop();");

  $m->nextFrame();

  array_push($z,placeinputtext($m,5,65,0x00,0x00,0x00,30,160,13,"inputtext",$f));

  $string_swf = new SWFPrebuiltClip(fopen("text_compare.swf",'rb'));

  add_actionscript($m,"correct=\"andy\";");

  print_r($string_swf);
  
  $wood = $m->add($string_swf);

  $wood->moveTo(0,0);

  placeinputtext($m,5,100,0x00,0x00,0x00,30,160,13,"space",$f);

  $i = $m->add(basic_input_background(5,100,15,30,0x00,0x00,0x00));

  $m->nextFrame();

  add_actionscript($m,"if(result){space = \"good\";}else{space = \"bad\";}");  

  add_actionscript($m,"stop();");
  
  $m->save("import.swf",0);  
  
?>
