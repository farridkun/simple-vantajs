<!DOCTYPE html>
<html>

<head>
    <title>FOG | Farrid</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: white;
        }

        .links>a {
            color: white;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>

<body>
    <!-- Inisialisasi syntax ' el: "#inifog" ' sesuai dengan yang ada di line 19 -->
    <div id="iniglobe"></div>
    <!-- Akhir Inisialisasi Div Id="inifog" -->

    <!-- Awal Script / Code Klean -->
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                GLOBE | Vanta.Js
            </div>

            <div class="links">
                <a href="https://latihan-kun.herokuapp.com/fog.php">FOG</a>
                <a href="https://latihan-kun.herokuapp.com/bird.php">BIRDS</a>
                <a href="https://latihan-kun.herokuapp.com/net.php">NET</a>
                <a href="https://latihan-kun.herokuapp.com/dots.php">DOTS</a>
                <a href="https://latihan-kun.herokuapp.com/rings.php">RINGS</a>
                <a href="#">TRUNK</a>
            </div>

            <br>

            <div class="links">
                <a href="https://instagram.com/farrid_jr" target="_blank">Oleh @Farrid_Jr</a>
            </div>
        </div>
    </div>

    <!-- Akhir Script Klean -->

    <!-- Script ini disimpan paling bawah atau diatas </body> -->
    <script src="js/three.r92.min.js"></script>
    <script src="js/vanta.globe.min.js"></script>
    <script>
        VANTA.GLOBE({
            el: "#iniglobe"
        })
    </script>
    <!-- Akhir dari Script Vanta.Js -->
</body>

</html>