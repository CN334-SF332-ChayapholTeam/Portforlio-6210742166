<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Education</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            width: 80%;
            display: block;
            margin: auto;
            padding-top: 100px;
        }
        .container-section {
            float: left;
            width: 55%;
        }
        .image-section {
            float: right;
            width: 40%;
            margin-left: 100px;
        }
        .image-section img {
            width: 70%;
            height: auto;
        }
        .content-section .title{
            text-transform: uppercase;
            font-size: 20px;
        }
        .content-section .centent h3{
            margin-top: 20px;
            color: #5d;
            font-size: 19px;
        }
        .content-section .content p {
            margin-top: 10px;
            font-family: sans-serif;
            font-size: 17px;
            line-height: 1.5;
        }
        .content-section .social {
            margin-top: 40px;
        }
        .content-section .social i {
            font-size: 30px;
            padding: 0px 10px;
        }
        #page {
            width: 100%;
            height: 100vh;
        }
        
        .dropdown {
            margin: 0 auto;
        }

        nav {
            height: 60px;
            background: lightblue;
            box-shadow: 0 10px 15 px rgba(0,0,0,0.1);
        }

        nav ul {
            padding: 0;
            margin: 0;
            float: right;
            margin-right: 30px;
        }

        nav ul li {
            background: lightblue;
            position: relative;
            list-style: none;
            display: inline-block;
        }

        nav ul li a {
            display: block;
            padding: 0 15px;
            color: white;
            text-decoration: none;
            line-height: 60px;
            font-size: 20px;
        }

        nav ul li a:hover {
            background: lightpink;
        }

        .logo {
            padding:  15px 0 0 80px;
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <div id="page">
        <div class="dropdown">
            <nav>
                <img class="logo" src="https://pngimage.net/wp-content/uploads/2018/06/png-portfolio-3.png">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About me</a></li>
                    <li><a href="/education">Education</a></li>
                    <li><a href="/skills">Skills</a></li>
                    <li><a href="/posts">Projects</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="section">
            <div class="container">
                <div class="image-section">
                    <img src="https://scontent.fnak4-2.fna.fbcdn.net/v/t1.15752-9/273246951_3253911068229303_7307726691383943134_n.png?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeEl9VLYVuKaic63XTX-gtQNKknhygD8CccqSeHKAPwJx9DX6ap6Xj2JIl_hx9JAvn6nvJhKfVGdGa_v-PLmTWLx&_nc_ohc=oGk-A7nGDhoAX8LIK7M&tn=lkCQVpSMKWK_wNe3&_nc_ht=scontent.fnak4-2.fna&oh=03_AVL2zg6bL_7Ffnobc2rilJJQoxmmmIX1ye1WmZUvquNjDg&oe=6234DA3A">
                </div>
                <div class="content-section">
                    <div class="title">
                        <h1>Education</h1>
                    </div>
                    <div class="content">
                        <br>
                        <h3>Chaiyabhumbhakdeechumphon School.</h3>
                        <p>High School | May 2016 - March 2019</p>
                        <br>
                        <h3>Thammasat University.</h3>
                        <p>Bachelor Of Engineering | August 2019 – present</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
    <script>
        VANTA.DOTS({
            el: "#page",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x0,
            color2: 0xffffff,
            backgroundColor: 0xffffff,
            size: 2.70,
            spacing: 45.00
        })
        </script>
    </body>
    </html>