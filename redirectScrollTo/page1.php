<!DOCTYPE html>
<html>
<head>
<title>Acknowledgement</title>

<style>
      *{
    margin:0;
    padding:0;
  }
  .box{
    height:50px;
    border-bottom: 1px solid red;
  }
  p{

  }
</style>
</head>
<body>

<main>

  <?php
for($i = 0; $i< 5000 ; $i += 50){
  echo '<div class="box"><p>'.$i.'</p><button class="go">go</button></div>';
}
  ?>

</main>

    <script src="../jquery-3.4.1.min.js"></script>
<script>

$(document).ready(function(){

//     var value1="value1";
// var value2="value2";
// var queryString = "?para1=" + value1 + "&para2=" + value2;

// for(i = 0; i< 5000; i+=50){
//     $('main').append('<div class="box"><p>'+i+'</p><button class="go">go</button></div>');
//   }

$('.go').on('click',function(){
    var scroll = $(window).scrollTop();
    var queryString = "?scroll="+scroll;

    console.log(queryString)

     window.location.href = "page2.php" + queryString;
    // $(window).scrollTop(100);
    // alert($(window).scrollTop());

}) 

    })
</script> 
</body>
</html>