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
            color: black;
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
            color: black;
        }

        .links>a {
            color: black;
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
    <div id="inifog"></div>
    <!-- Akhir Inisialisasi Div Id="inifog" -->

    <!-- Awal Script / Code Klean -->

    <div id="iniglobe"></div>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                FOG | Vanta.Js
            </div>

            <div class="links">
                <a href="https://latihan-kun.herokuapp.com/">GLOBE</a>
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
    <script src="js/vanta.fog.min.js"></script>
    <script>
        VANTA.FOG({
            el: "#inifog"
        })
    </script>
    <!-- Akhir dari Script Vanta.Js -->
</body>

</html>