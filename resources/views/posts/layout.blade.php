<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #page {
            width: 100%;
            height: 100vh;
        }
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

    .dropdown nav .logo {
        padding:  15px 0 0 80px;
        width: 150px;
        height: auto;
    }
</style>
</head>
<body>
    <div id="page">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
    <script>
        VANTA.GLOBE({
          el: "#page",
          mouseControls: true,
          touchControls: true,
          gyroControls: false,
          minHeight: 200.00,
          minWidth: 200.00,
          scale: 1.00,
          scaleMobile: 1.00,
          color: 0xb9a1fa,
          color2: 0xb7e8cb,
          backgroundColor:0xffffff
      })
  </script>
</body>
</html>