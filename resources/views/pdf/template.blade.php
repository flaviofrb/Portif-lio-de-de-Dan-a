<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Portifólio b.boy iron</title>
</head>

<style>
    @font-face {
        font-family: 'Poppins';
        font-weight: 400;
        font-style: normal;
    }

    body {
        font-family: 'Poppins', sans-serif;
        line-height: 1.5;
        margin: 0;
        position: relative;
        background: url("/image/Moderno\ Arte\ Minimalista\ YouTube\ Miniatura.png") no-repeat center;
        background-size: cover;
    }

    h1,
    .title,
    .text {
        text-align: center;
    }

    .about .about-content .left {
        width: 45%;
    }

    .about .about-content .left img {
        margin-left: 50%;
        height: 399px;
        width: 400px;
        object-fit: cover;
        border-radius: 5px;
        border: 5px solid crimson;
    }

    .about .about-content .right {
        width: 100%;
    }

    .about .about-content .right .text {
        font-size: 25px;
        font-weight: 600;
    }

    .about .about-content .right p {
        text-align: justify;
    }

    .about .about-content .right a {
        display: inline-block;
        background: crimson;
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding: 5px 5px;
        margin-top: 20px;
        border-radius: 5px;
        border: 2px solid crimson;
        text-decoration: none;
    }

    .teams .carousel .card {
        padding: 25px 35px;
        text-align: center;
    }

    .teams .carousel .card .text {
        font-size: 25px;
        font-weight: 500;
        margin: 10px 0 1px 0;
    }

    .teams .carousel .card img {
        height: 235px;
        width: 230px;
        object-fit: cover;
        border-radius: 5px;
        border: 5px solid crimson;
    }
</style>

<body>
    <h1>Portifólio b.boy iron</h1>

    <div>
        <!-- about section start -->
        <section class="about" id="about">
            @component('.Fotos._components.sobre')
            @endcomponent
        </section>
    </div>

    <br><br><br><br>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            @component('.Fotos._components.momentos')
            @endcomponent
        </div>
    </section>

    </div>


</body>

</html>
