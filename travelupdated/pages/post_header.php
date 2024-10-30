  <link rel="stylesheet" href="./css/post_head.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<title>ExploreBooked</title>
	<link rel="icon" type="image/x-icon" href="../images/logo.png">

<div id="navbar">


 
      <a href="#default" id="logo">
    <img src="../images/logo.png" alt="">
    <h4>ExploreBooked</h4>
  </a>

   <div class="w3-bar w3-right">
     <a href="#" class="w3-bar-item  w3-mobile" id="nav-link">Home</a>
    <a href="#" class="w3-bar-item  w3-mobile" id="nav-link" >About</a>
    <a href="#" class="w3-bar-item  w3-mobile" id="nav-link">Countact</a>
    
  </div>
</div>



<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.padding = "20px 10px";
    document.getElementById("logo").style.fontSize = "15px";
  } else {
    document.getElementById("navbar").style.padding = "10px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  }
}
</script>

<style>
  /* Center the items in the navbar */
.w3-bar{
  display: flex;
  justify-content: center;
  margin-top: -50px;
  margin-left: 50px;
}
</style>
