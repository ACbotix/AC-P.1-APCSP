<html>


<!--/ this document is the alternative page to reach the gallery -->
<!--/ Sticky Navbar -->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
  width: 100%;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  height: 100%;
  width: 100%;
}

#navbar {
  overflow: hidden;
  background-color: #333;
  height: 100%;
  width: 100%;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
  
}


#navbar a.active {
  background-color: #777777;
  color: white;
 
}

.content {
  padding: 16px;
  height: 100%;
  width: 100%;
}

.sticky {
  position: fixed;
  top: 0;
  height: 100%;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>


<!--Gallery tabs-->

<div id="navbar">
  <a class="active" href="nature_gallery.php">Nature</a>
  <a href="people_gallery.php">People</a>
  <a href="modern_gallery.php">Modern</a>
</div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>





</html>