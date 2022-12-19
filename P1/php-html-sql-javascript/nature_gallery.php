<html>
<!-- Nature Image Gallery Page -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      font-size: 28px;
      font-family: Arial, Helvetica, sans-serif;
    }

    .header {
      background-color: #f1f1f1;
      padding: 30px;
      text-align: center;
    }

    /* Nav Bar Styles */
    #navbar {
      overflow: hidden;
      background-color: #333;
      z-index: 1000;
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

    #navbar div.active {
      background-color: #777777;
      color: white;
    }

    /* Dropdown Menu Styles */
    .dropdown {
      float: left;
      overflow: hidden;
      z-index: 1001;
    }

    .dropdown .dropbtn {
      font-size: 17px;
      border: none;
      outline: none;
      color: #f2f2f2;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    #navbar a:hover .dropdown:hover .dropbtn {
      background-color: #ddd;
      color: black;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #333;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .content {
      padding: 16px;
    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }

    .sticky+.content {
      padding-top: 60px;
    }

    /* Gallery Styles */
    .container {
      max-width: 1600px;
      margin: 50 auto;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .gallery-item {
      width: 330px;
      height: 265px;
      margin: 10px;
      text-decoration: none;
    }

    .gallery-item img {
      position: absolute;
      width: 330px;
      height: 265px;
    }

    .text-wrapper {
      position: relative;
      width: 330px;
      height: 265px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      color: #fff;
      opacity: 0;
    }

    .text-wrapper:hover {
      transition: all 0.8s ease;
      background: rgba(0, 0, 0, 0.6);
      opacity: 1;
    }

    .name {
      font-size: 1.5em;
    }

    /* 
    For touch devices, hover action is not available. 
    Displaying the text at the bottom of the image. 
    */
    @media only screen and (max-width: 1024px) {
      .text-wrapper {
        opacity: 1;
        justify-content: flex-end;
        text-shadow: 1px 1px 1px #000;
      }

      .title {
        margin-bottom: 1em;
      }
    }
  </style>
</head>

<body>
  <!-- Sticky Nav Bar -->
  <script>
    window.onscroll = function () { myFunction() };

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

  <!-- Navigation Bar -->
  <div id="navbar">
    <!-- Home Tab -->
    <a id="home" href="home.php">Home</a>
    <!-- Feedback Tab -->
    <a id="feedback" href="login.php">Feedback</a>
    <!-- Gallery Dropdown Menu Tab - Active -->
    <div class="dropdown active">
      <button id="gallery" class="dropbtn">Gallery
        <!-- dropdown icon from font-awesome.js -->
        <i class="fa fa-caret-down"></i>
      </button>
      <!-- Dropdown Menu Items -->
      <div class="dropdown-content">
        <!-- Nature Gallery Menu Item - Active -->
        <a class="active" href=nature_gallery.php>Nature</a>
        <!-- People Gallery Menu Item -->
        <a href="people_gallery.php">People</a>
        <!-- Modern Gallery Menu Item -->
        <a href="modern_gallery.php">Modern Art</a>
      </div>
    </div>
  </div>

  <!-- Container for Gallery Content -->
  <div class="container">
    <!-- Gallery Title -->
    <div>
      <h1 style="text-align:center">Nature Photography</h1>
    </div>
    <!-- Gallery -->
    <div class="gallery">
      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature1.jpg">
        <!-- Image -->
        <img src="../images/nature1.jpg" alt="Look deep into nature, and then you will understand everything better." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">Look deep into nature, and then you will understand everything better.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature2.jpg">
        <!-- Image -->
        <img src="../images/nature2.jpg" alt="Nature does not hurry, yet everything is accomplished." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">Nature does not hurry, yet everything is accomplished.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature3.jpg">
        <!-- Image -->
        <img src="../images/nature3.jpg" alt="Autumn is a second spring when every leaf is a flower." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">Autumn is a second spring when every leaf is a flower.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature4.jpg">
        <!-- Image -->
        <img src="../images/nature4.jpg" alt="In all things of nature there is something of the marvelous." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">In all things of nature there is something of the marvelous.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature5.jpg">
         <!-- Image -->
        <img src="../images/nature5.jpg" alt="Nature does not hurry, yet everything is accomplished." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">Nature does not hurry, yet everything is accomplished.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature6.jpg">
         <!-- Image -->
        <img src="../images/nature6.jpg"
          alt="For my part I know nothing with any certainty, but the sight of the stars makes me dream." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">For my part I know nothing with any certainty, but the sight of the stars makes me
            dream.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature7.jpg">
         <!-- Image -->
        <img src="../images/nature7.jpg"
          alt="For in the true nature of things, if we rightly consider, every green tree is far more glorious than if it were made of gold and silver." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">For in the true nature of things, if we rightly consider, every green tree is far more
            glorious than if it were made of gold and silver.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature8.jpg">
         <!-- Image -->
        <img src="../images/nature8.jpg"
          alt="The sea, once it casts its spell, holds one in its net of wonder forever." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">The sea, once it casts its spell, holds one in its net of wonder forever.</span>
        </span>
      </a>

      <!-- Gallery Item -->
      <a class="gallery-item" target="_blank" href="../images/nature9.jpg">
         <!-- Image -->
        <img src="../images/nature9.jpg" alt="Nature is the art of God." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">Nature is the art of God.</span>
        </span>
      </a>

      <!-- Gallery Item --> 
      <a class="gallery-item" target="_blank" href="../images/nature10.jpg">
         <!-- Image -->
        <img src="../images/nature10.jpg"
          alt="Over every mountain there is a path, although it may not be seen from the valley." />
        <!-- Image Text -->
        <span class="text-wrapper">
          <span class="title">Over every mountain there is a path, although it may not be seen from the valley.</span>
        </span>
      </a>
    </div>
  </div>
</body>

</html>