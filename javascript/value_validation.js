function is_integer(sText){
   var ValidChars = "0123456789";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++){ 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1){
         IsNumber = false;
      }
   }

   return IsNumber;
   
}

function is_hex(sText)
{
   var ValidChars = "0123456789abcdefABCDEF";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++){ 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1){
         IsNumber = false;
      }
   }

   return IsNumber;
   
}