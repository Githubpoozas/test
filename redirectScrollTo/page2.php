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
  // for(i = 0; i< 5000; i+=50){
  //   $('main').append('<div class="box"><p>'+i+'</p></div>');
  // }
 
var queryString = decodeURIComponent(window.location.search);
if(queryString){
  queryString = queryString.substring(1);
var queries = queryString.split("=");
// alert('jump to ' + queries[1]);
$(window).scrollTop(queries[1]);
} else {
  console.log("no jumping");
}


// for (var i = 0; i < queries.length; i++)
// {
//   document.write(queries[i] + "<br>");
// }
 
</script> 
</body>
</html>