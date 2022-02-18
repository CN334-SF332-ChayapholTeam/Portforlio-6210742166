<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Skills</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: 'Poppins', sans-serif;
        }
        .dropdown {
            margin: 0 auto;
        }

        .dropdown nav {
            height: 60px;
            background: lightblue;
            box-shadow: 0 10px 15 px rgba(0,0,0,0.1);
        }

        .dropdown nav ul {
            padding: 0;
            margin: 0;
            float: right;
            margin-right: 30px;
        }

        .dropdown nav ul li {
            background: lightblue;
            position: relative;
            list-style: none;
            display: inline-block;
        }

        .dropdown nav ul li a {
            display: block;
            padding: 0 15px;
            color: white;
            text-decoration: none;
            line-height: 60px;
            font-size: 20px;
        }

        .dropdown nav ul li a:hover {
            background: lightpink;
        }

        .logo {
            padding:  15px 0 0 80px;
            width: 150px;
            height: auto;
        }
        #page {
            width: 100%;
            height: 100vh;
        }
        .skill {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .skill nav {
            background-color: white;
            padding: 40px 60px;
            border: solid 1px #ccc;
            border-radius: 10px;
        }
        .skill nav a {
            text-decoration: none;
            margin: 0 25px;
            font-size: 1.4rem;
            font-family: arial;
            font-weight: bold;
            letter-spacing: 1px;
            position: relative;
            color: #151515;
        }
        .skill nav a:after {
            content: '';
            position: absolute;
            width: 10%;
            opacity: 0;
            height: 5px;
            background-image: linear-gradient(to  right,#f7c4ef,#dbe4f8,#c4feff);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 25px;
            transition: .4s;
        }
        .skill nav a:hover::after {
            width: 50%;
            opacity: 1;
        }
        .center h3 {
            color: white;
            font-size: 70px;
            font-weight: bold;
            font-family: arial;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 20px;
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
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="center">
            <h3>Programming Language</h3>
        </div>
        <div class="skill">
            <nav>
                <a href="#">Python</a>
                <a href="#">Java</a>
                <a href="#">C/C++</a>
                <a href="#">PHP</a>
                <a href="#">SQL</a>
                <a href="#">HTML</a>
                <a href="#">JacaScript</a>
            </nav>
        </div>
        <div class="center">
            <h3>Frameworks</h3>
        </div>
        <div class="skill">
            <nav>
                <a href="#">React Native</a>
                <a href="#">Laravel</a>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
    <script>
        VANTA.WAVES({
            el: "#page",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00
        })
    </script>
</body>
</html>