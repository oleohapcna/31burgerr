//Preventing text highlighting (selection) on double click
$("body").disableSelection();

//You needed to use .html() or .text() instead of .val() to get the qty. Also, since this came as a string, you needed to call parseInt() on it before doing math.

/*   $(".plus").click(function(){
       var quantity = parseInt($(".qty").text()) +1;
       $(".qty").text(quantity);
       return false;
   });

  $(".minus").click(function(){
       var quantity = parseInt($(".qty").text()) -1;
       if(quantity < 0) quantity = 0;
       $(".qty").text(quantity);
       return false;
   });*/

// ########  Using html() instead of text()

  $(".plus").click(function(){
       var quantity = parseInt($(".qty").html()) +1;
       $(".qty").html(quantity);
       return false;
   });

  $(".minus").click(function(){
       var quantity = parseInt($(".qty").html()) -1;
       if(quantity < 0) quantity = 0;
       $(".qty").html(quantity);
       return false;
   });

// ########  Using input instead of div  

/*  $(".plus").click(function(){
       var quantity = parseInt($(".qty").val()) +1;
       $(".qty").val(quantity);
       return false;
   });

  $(".minus").click(function(){
       var quantity = parseInt($(".qty").val()) -1;
       if(quantity < 0) quantity = 0;
       $(".qty").val(quantity);
       return false;
   });*/