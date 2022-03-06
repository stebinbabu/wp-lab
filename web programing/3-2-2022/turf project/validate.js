

function validate()
{ 
   if( document.sell.fname.value == "" )
   {
     alert( "Please provide your Name!" );
     document.sell.fname.focus() ;
     return false;
   }
   if( document.sell.pname.value == "" )
   {
     alert( "Please provide your Product Name!" );
     document.sell.pname.focus() ;
     return false;
   }
   
   if( document.sell.qty.value == "" )
   {
     alert( "Please provide Quantity!" );
     document.sell.qty.focus() ;
     return false;
   }
   if ( ( sell.stock[0].checked == false ) && ( sell.stock[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }   
  if ( ( sell.store[0].checked == false ) && ( sell.store[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }
   if ( ( sell.supplier[0].checked == false ) && ( sell.supplier[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }
  

  if( document.sell.mobileno.value == "" ||
           isNaN( document.sell.mobileno.value) ||
           document.sell.mobileno.value.length != 10 )
   {
     alert( "Please provide a  valid Mobile No" );
     document.sell.mobileno.focus() ;
     return false;
   }
   return( true );
}
