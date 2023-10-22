<head>
    <title>Канский Педагогический Колледж » Студент года 2023</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href={{asset('css/bootstrap.min.css') }}>





</head>
<style>
    @-webkit-keyframes card-shift {
        0% {
            -webkit-transform: translate3d(-30px, 0, 0);
            transform: translate3d(-30px, 0, 0)
        }
        25% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }
        50% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }
        75% {
            -webkit-transform: translate3d(-30px, 0, 0);
            transform: translate3d(-30px, 0, 0)
        }
        to {
            -webkit-transform: translate3d(-30px, 0, 0);
            transform: translate3d(-30px, 0, 0)
        }
    }

    @keyframes card-shift {
        0% {
            -webkit-transform: translate3d(-30px, 0, 0);
            transform: translate3d(-30px, 0, 0)
        }
        25% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }
        50% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }
        75% {
            -webkit-transform: translate3d(-30px, 0, 0);
            transform: translate3d(-30px, 0, 0)
        }
        to {
            -webkit-transform: translate3d(-30px, 0, 0);
            transform: translate3d(-30px, 0, 0)
        }
    }

    body {
        margin: 0;
        padding: 0;
    }

    .card-wrapper {
        overflow: hidden;
        display: block;
        height: 900px;
        position: relative;


    h1 {
        font-family: 'Alex Brush';
        color: #fff;
        font-size: 9em;
        text-shadow: 5px 4px 7px rgba(#000, .4);
        display: block;
    }

    }

    .shade {
        position: absolute;
        z-index: -1;
    / / background: rgba(blue, .6);
        background: -webkit-linear-gradient(top, rgba(#103d85, .6), rgba(#451f49, .8) 62%, rgba(#5b2911, .4) 99%);
        background-image: linear-gradient(180deg, rgba(#103d85, .6), rgba(#451f49, .8) 62%, rgba(#5b2911, .4) 99%);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .card__bg__image {
        height: calc(100% + 30px);
        width: calc(100% + 30px);
        -webkit-animation: card-shift 12s ease-in-out infinite;
        animation: card-shift 12s ease-in-out infinite;
        position: absolute;
        z-index: -3;
    / / height: 600 px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .card__bg_image img {
        object-fit: fill;
    }


    @font-face {
        font-family: 'Century Gothic';
        font-style: normal;
        font-weight: normal;
        src: local('Century Gothic'),
        url('{{ asset('fonts/GOTHIC.TTF') }}') format('ttf'),
    }


    @media (min-width: 0px) and (max-width: 576px) {
        .main_bg {
            width: 100%;
            height: 100%;
            background: url('{{ asset('img/bt-top_576.png') }}') no-repeat;
            background-position: center;
        }

        .text_div {
            position: absolute;
            margin: auto;
            top: 90;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px;
        }


        .text-1 {
            font-family: 'Century Gothic';
            color: #14709a;
            font-size: 28px;
            width: 90%;
            text-shadow: 1px 1px 5px #023a4e59;
            padding: 0px 20px 0px 20px;
        }

        .main_form {
            position: absolute;
            padding: 10px;

            top: 300px;
            width: 76%;
            height: 100%;
            background: #fff;
            box-shadow: 0 0 8px 3px rgb(0 0 0 / 16%);
            border-radius: 3px 3px 3px 3px;
            border: 1px #dad9da solid;
        }

        .my-block {
            -webkit-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            -moz-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            background-color: white;
            padding-top: 15px;
            margin-bottom: 80px;
            margin-top: -60px;
            margin-left: 10px;
            margin-right: 10px;
            width: 95%;
            border-radius: 5px;
        }
    }

    @media (min-width: 576px) and (max-width: 768px) {
        .main_bg {
            width: 100%;
            height: 100%;
            background: url('{{ asset('img/bt-top_768.png') }}') no-repeat;
            background-position: center;
        }

        .text_div {
            position: absolute;
            margin: auto;
            top: 110;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px;
        }

        .text-1 {
            font-family: 'Century Gothic';
            color: #14709a;
            font-size: 28px;
            width: 90%;
            text-shadow: 1px 1px 5px #023a4e59;
            padding: 0px 20px 0px 20px;
        }

        .my-block {
            -webkit-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            -moz-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            background-color: white;
            padding-top: 15px;
            margin-bottom: 80px;
            margin-top: -60px;
            border-radius: 5px;
        }
    }

    @media (min-width: 768px) and (max-width: 992px) {
        .main_bg {
            width: 100%;
            height: 100%;
            background: url('{{ asset('img/bt-top_992.png') }}') no-repeat;
            background-position: center;
        }

        .text_div {
            position: absolute;
            margin: auto;
            top: 100;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px;
        }

        .text-1 {
            font-family: 'Century Gothic';
            color: #14709a;
            font-size: 38px;
            width: 90%;
            text-shadow: 1px 1px 5px #023a4e59;
            padding: 0px 20px 0px 20px;
        }

        .my-block {
            -webkit-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            -moz-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            background-color: white;
            padding-top: 15px;
            margin-bottom: 80px;
            margin-top: -60px;
            border-radius: 5px;
        }
    }

    @media (min-width: 992px) {
        .main_bg {
            width: 100%;
            height: 100%;
            background: url('{{ asset('img/bt-top.png') }}') no-repeat;
            background-position: center;
        }

        .text_div {
            position: absolute;
            margin: auto;
            top: 90;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px;
        }

        .text-1 {
            font-family: 'Century Gothic';
            color: #14709a;
            font-size: 48px;
            width: 90%;
            text-shadow: 1px 1px 5px #023a4e59;
            padding: 0px 20px 0px 20px;
        }

        .my-block {
            -webkit-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            -moz-box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            box-shadow: 1px 5px 20px 9px rgba(89, 96, 101, 0.27);
            background-color: white;
            padding-top: 15px;
            margin-bottom: 80px;
            margin-top: -60px;
            border-radius: 5px;
        }
    }

    @media (min-width: 1200px){}

        .h2, h2 {
            font-size: 4rem;
        }
    }

    .main_middle {
        width: 100%;
        height: 5px;
        background: url('{{ asset('img/bg-middle.jpg') }}') repeat-x;
    }


</style>


<body style="padding:0px; margin:0pxl; background: url({{ asset('img/bg-low.jpg') }}) ;">
<div class="card-wrapper" style="width: 100%; height: 350px;">
    <div class="shade"></div>
    <div class="card__bg__image" style="margin:auto; background-color: #ffffff;">

        <picture>
            <source srcset="{{ asset('img/bg-top_small.jpg') }}" media="(min-width: 0px) and (max-width: 576px)"/>
            <source srcset="{{ asset('img/bg-top_mid.jpg') }}" media="(min-width: 576px) and (max-width: 768px)"/>
            <source srcset="{{ asset('img/bg-top_big.jpg') }}" media="(min-width: 768px) and (max-width: 992px)"/>
            <img src="{{ asset('img/bg-top.jpg') }}"/>
        </picture>

    </div>

    <div
        style="width: 100%;height: 100%;background: url('{{ asset('img/bt-top.png') }}'); background-position: center; text-align: center;">

        {{--<div class=main_bg></div>--}}
        <div class=text_div>
            <span class=text-1>Канский педагогический колледж</span></div>
    </div>
</div>


@yield('content')


<script src="{{ asset('js/bootstrap.min.js') }}"></script>


</body>
</html>
