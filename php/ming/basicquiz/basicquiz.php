<?
  
  $font="../../../fonts/_sans.fdb";

  $f = new SWFFont($font);

  include "../ming_functions.php";

  $m = createnewswf(1.0,176,208,0xFF,0xFF,0xFF);

  $z = array();

  add_actionscript($m,"score=0; number_of_questions=1;");

  // PAGE BEGINS

  array_push($z,placetext("Question 1",$m,5,5,0x00,0x00,0x00,170,15,13));
 
  array_push($z,placetext("What is the capital of England?",$m,5,23,0x00,0x00,0x00,170,50,13));
 
  $material = button("score+=1;nextFrame();",5,120,160,20,"London",0xFF,0xFF,0xFF,0x00,0x00,0x00,13,$m,160);

  array_push($z,$material[0]);
  array_push($z,$material[1]); 

  array_push($z,placetext("or",$m,10,145,0,0,0,160,13,13));

  $material = button("score+=0;nextFrame();",5,170,160,20,"Paris",0xFF,0xFF,0xFF,0x00,0x00,0x00,13,$m,160);

  array_push($z,$material[0]);
  array_push($z,$material[1]); 

  add_actionscript($m,"stop();");

  $m->nextFrame();

  clean_up($z);

  placeinputtext($m,5,5,0x00,0x00,0x00,200,170,13,"inputtext");

  add_actionscript($m, "inputtext=\"You scored\";");

  placeinputtext($m,5,30,0x00,0x00,0x00,200,170,13,"scoretext");

  add_actionscript($m, "scoretext=score;");

  placeinputtext($m,5,50,0x00,0x00,0x00,200,170,13,"outof");

  add_actionscript($m, "outof=\"out of\";");

  placeinputtext($m,5,80,0x00,0x00,0x00,200,170,13,"noquestions");

  add_actionscript($m, "noquestions=number_of_questions;");

  // Send data 
  $m->save("basicquiz.swf",0);
  
?>
