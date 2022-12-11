<html>

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
            /* Important for vertical align on mobile phones */
            margin: 0;
            /* Important for vertical align on mobile phones */
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

        /*
    div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      padding: 15px;
      text-align: center;
    }
    */

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

        /* Because there is no hover on a touch device, we need to move the text to the bottom of the image and display it by default */
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
    <div id="navbar">
        <a id="home" href="home.php">Home</a>
        <a id="feedback" href="login.php">Feedback</a>
        <!--a href="gallery.php">Gallery</a-->
        <div class="dropdown active">
            <button id="gallery" class="dropbtn">Gallery
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="nature_gallery.php">Nature</a>
                <a href="people_gallery.php">People</a>
                <a class="active" href="modern_gallery.php">Modern Art</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <h1 style="text-align:center">Modern Art Photography</h1>
        </div>

        <div>
            <div class="gallery">
                <a class="gallery-item" target="_blank" href="../images/modern1.jpg">
                    <img src="../images/modern1.jpg" alt="Fifty grand for a paper bucket? Well it was all about context, you see." />
                    <span class="text-wrapper">
                        <span class="title">Fifty grand for a paper bucket? Well it was all about context, you see.
                        </span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern2.jpg">
                    <img src="../images/modern2.jpg"
                        alt="The audience can endorse the triviality of modern art, but they can’t like it." />
                    <span class="text-wrapper">
                        <span class="title">The audience can endorse the triviality of modern art, but they can’t like it.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern3.jpg">
                    <img src="../images/modern3.jpg"
                        alt="Art is an expression that transcends religion, culture, country, people and time." />
                    <span class="text-wrapper">
                        <span class="title">Art is an expression that transcends religion, culture, country, people and time.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern4.jpg">
                    <img src="../images/modern4.jpg"
                        alt="I have never been against new art as such; some of it is good, much is crap, most is somewhere in between." />
                    <span class="text-wrapper">
                        <span class="title">I have never been against new art as such; some of it is good, much is crap, most is somewhere in between.
                            better.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern5.jpg">
                    <img src="../images/modern5.jpg"
                        alt="Sanat, doğrudan bir kullanım değeri olmayan lüks maldır." />
                    <span class="text-wrapper">
                        <span class="title">Sanat, doğrudan bir kullanım değeri olmayan lüks maldır.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern6.jpg">
                    <img src="../images/modern6.jpg"Die Künste, die den Müll der Welt zu spiegeln vorgeben, vermehren ihn nur." />
                    <span class="text-wrapper">
                        <span class="title">Die Künste, die den Müll der Welt zu spiegeln vorgeben, vermehren ihn nur.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern7.jpg">
                    <img src="../images/modern7.jpg"
                        alt="Dreams are the clay through which we mold our art." />
                    <span class="text-wrapper">
                        <span class="title">Dreams are the clay through which we mold our art.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern8.jpg">
                    <img src="../images/modern8.jpg"
                        alt="Modern art has to be what is called ‘intense.’ it is not easy to define being intense." />
                    <span class="text-wrapper">
                        <span class="title">Modern art has to be what is called ‘intense.’ it is not easy to define being intense.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern9.jpg">
                    <img src="../images/modern9.jpg"
                        alt="Calcutta is like a work of modern art that neither makes sense nor has utility, but exists for some esoteric aesthetic reason." />
                    <span class="text-wrapper">
                        <span class="title">Calcutta is like a work of modern art that neither makes sense nor has utility, but exists for some esoteric aesthetic reason.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern10.jpg">
                    <img src="../images/modern10.jpg"
                        alt="They lived off each other's hypocrisy, fuelling a worthless market of trash." />
                    <span class="text-wrapper">
                        <span class="title">They lived off each other's hypocrisy, fuelling a worthless market of trash.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern11.jpg">
                    <img src="../images/modern11.jpg"
                        alt="Stop thinking about art works as objects and start thinking about them as triggers for experiences." />
                    <span class="text-wrapper">
                        <span class="title">Stop thinking about art works as objects and start thinking about them as triggers for experiences.</span>
                    </span>
                </a>

                <a class="gallery-item" target="_blank" href="../images/modern12.jpg">
                    <img src="../images/modern12.jpg"
                        alt="What makes a work of art good for you is not something that s already inside it but something that happens inside you." />
                    <span class="text-wrapper">
                        <span class="title">What makes a work of art good for you is not something that s already inside it but something that happens inside you.</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>