<html>
<!-- People Image Gallery Page -->
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

        /* Display text with transition on hover over image */
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
                <!-- Nature Gallery Menu Item -->
                <a href="nature_gallery.php">Nature</a>
                <!-- People Gallery Menu Item - Active -->
                <a class="active" href="people_gallery.php">People</a>
                <!-- Modern Gallery Menu Item -->
                <a href="modern_gallery.php">Modern Art</a>
            </div>
        </div>
    </div>
    <!-- Container for Gallery Content -->
    <div class="container">
        <!-- Gallery Title -->
        <div>
            <h1 style="text-align:center">People Photography</h1>
        </div>
        <!-- Gallery -->
        <div>
            <div class="gallery">
                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people1.jpg">
                    <!-- Image -->
                    <img src="../images/people1.jpg" alt="It is better to keep your mouth closed and let people think you are a fool than to open it and remove all doubt." />
                   <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">It is better to keep your mouth closed and let people think you are a fool than to open it and remove all doubt.
                        </span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people2.jpg">
                    <!-- Image -->
                    <img src="../images/people2.jpg"
                        alt="Great minds discuss ideas; average minds discuss events; small minds discuss people." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">Great minds discuss ideas; average minds discuss events; small minds discuss people.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people3.jpg">
                     <!-- Image -->
                    <img src="../images/people3.jpg"
                        alt="People may hear your words, but they feel your attitude." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">People may hear your words, but they feel your attitude.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people4.jpg">
                    <!-- Image -->
                    <img src="../images/people4.jpg"The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.people: Look deep into people, and then you will understand everything better." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people5.jpg">
                    <!-- Image -->
                    <img src="../images/people5.jpg"
                        alt="I feel that there is nothing more truly artistic than to love people." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">I feel that there is nothing more truly artistic than to love people.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people6.jpg">
                    <!-- Image -->
                    <img src="../images/people6.jpg"
                        alt="Success is a lousy teacher. It seduces smart people into thinking they can't lose." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">Success is a lousy teacher. It seduces smart people into thinking they can't lose.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people7.jpg">
                    <!-- Image -->
                    <img src="../images/people7.jpg"
                        alt="A nation's culture resides in the hearts and in the soul of its people." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">A nation's culture resides in the hearts and in the soul of its people.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people8.jpg">
                    <!-- Image -->
                    <img src="../images/people8.jpg"
                        alt="There are more people who wish to be loved than there are who are willing to love." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">There are more people who wish to be loved than there are who are willing to love.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people9.jpg">
                    <!-- Image -->
                    <img src="../images/people9.jpg"
                        alt="Some people want it to happen, some wish it would happen, others make it happen." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">Some people want it to happen, some wish it would happen, others make it happen.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people10.jpg">
                    <!-- Image -->
                    <img src="../images/people10.jpg"
                        alt="The key is to keep company only with people who uplift you, whose presence calls forth your best." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">The key is to keep company only with people who uplift you, whose presence calls forth your best.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people11.jpg">
                    <!-- Image -->
                    <img src="../images/people11.jpg"
                        alt="Tough times never last, but tough people do." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">Tough times never last, but tough people do.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people12.jpg">
                    <!-- Image -->
                    <img src="../images/people12.jpg"
                        alt="I don't have too many friends. I have only a few people who I really love." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">I don't have too many friends. I have only a few people who I really love.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people13.jpg">
                    <!-- Image -->
                    <img src="../images/people13.jpg"
                        alt="Music can change the world because it can change people." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">Music can change the world because it can change people.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people14.jpg">
                    <!-- Image -->
                    <img src="../images/people9.jpg"
                        alt="I don't want other people to decide who I am. I want to decide that for myself." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">I don't want other people to decide who I am. I want to decide that for myself.</span>
                    </span>
                </a>

                <!-- Gallery Item -->
                <a class="gallery-item" target="_blank" href="../images/people15.jpg">
                    <!-- Image -->
                    <img src="../images/people15.jpg"
                        alt="If you think in terms of a year, plant a seed; if in terms of ten years, plant trees; if in terms of 100 years, teach the people." />
                    <!-- Image Text -->
                    <span class="text-wrapper">
                        <span class="title">If you think in terms of a year, plant a seed; if in terms of ten years, plant trees; if in terms of 100 years, teach the people.</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>