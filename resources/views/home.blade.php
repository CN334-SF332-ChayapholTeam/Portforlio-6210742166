<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        body {
            font-family: arial;
            margin: 0;
            padding: 0;
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

        #bodypage {
            width: 100%;
            height: 100vh;
        }

        .center {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: arial;
            user-select: none;
        }

        .center h1 {
            color: white;
            font-size: 70px;
            font-weight: bold;
            width: 900px;
            text-align: center;
        }
    </style>
</head>
<body>
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

    <div id="bodypage">
     <div class="center">
        <h1>Thanalak Sisattayasunthon</h1>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script>
    VANTA.NET({
        el: "#bodypage",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xfad6dd,
        backgroundColor: 0xbcb3f2,
        points: 11.00,
        maxDistance: 27.00,
        spacing: 16.00,
        showDots: false
    })
</script>
</body>
</html>