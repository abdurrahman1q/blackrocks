<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Midnight Music</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: url(https://i.pinimg.com/originals/44/6e/3b/446e3b79395a287ca32f7977dd83b290.jpg);
            background-size: cover;
        }

        .firefly {
            position: fixed;
            left: 50%;
            top: 50%;
            width: 0.4vw;
            height: 0.4vw;
            margin: -0.2vw 0 0 9.8vw;
            animation: ease 200s alternate infinite;
            pointer-events: none;
        }

        .firefly::before,
        .firefly::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            transform-origin: -10vw;
        }

        .firefly::before {
            background: black;
            opacity: 0.4;
            animation: drift ease alternate infinite;
        }

        .firefly::after {
            background: white;
            opacity: 0;
            box-shadow: 0 0 0vw 0vw yellow;
            animation: drift ease alternate infinite, flash ease infinite;
        }

        .firefly:nth-child(1) {
            animation-name: move1;
        }

        .firefly:nth-child(1)::before {
            animation-duration: 13s;
        }

        .firefly:nth-child(1)::after {
            animation-duration: 13s, 5175ms;
            animation-delay: 0ms, 934ms;
        }

        @keyframes move1 {
            0% {
                transform: translateX(-5vw) translateY(-18vh) scale(0.75);
            }

            4.347826087% {
                transform: translateX(28vw) translateY(-20vh) scale(0.9);
            }

            8.6956521739% {
                transform: translateX(33vw) translateY(43vh) scale(0.95);
            }

            13.0434782609% {
                transform: translateX(5vw) translateY(47vh) scale(0.32);
            }

            17.3913043478% {
                transform: translateX(49vw) translateY(15vh) scale(0.74);
            }

            21.7391304348% {
                transform: translateX(37vw) translateY(-44vh) scale(0.68);
            }

            26.0869565217% {
                transform: translateX(49vw) translateY(-21vh) scale(0.28);
            }

            30.4347826087% {
                transform: translateX(34vw) translateY(41vh) scale(0.78);
            }

            34.7826086957% {
                transform: translateX(-17vw) translateY(-10vh) scale(0.31);
            }

            39.1304347826% {
                transform: translateX(29vw) translateY(-21vh) scale(0.72);
            }

            43.4782608696% {
                transform: translateX(-35vw) translateY(4vh) scale(0.53);
            }

            47.8260869565% {
                transform: translateX(49vw) translateY(36vh) scale(0.93);
            }

            52.1739130435% {
                transform: translateX(42vw) translateY(-15vh) scale(0.63);
            }

            56.5217391304% {
                transform: translateX(20vw) translateY(24vh) scale(0.82);
            }

            60.8695652174% {
                transform: translateX(-41vw) translateY(19vh) scale(0.55);
            }

            65.2173913043% {
                transform: translateX(21vw) translateY(30vh) scale(0.78);
            }

            69.5652173913% {
                transform: translateX(-32vw) translateY(-49vh) scale(0.82);
            }

            73.9130434783% {
                transform: translateX(20vw) translateY(27vh) scale(0.66);
            }

            78.2608695652% {
                transform: translateX(17vw) translateY(-22vh) scale(0.63);
            }

            82.6086956522% {
                transform: translateX(-42vw) translateY(36vh) scale(0.27);
            }

            86.9565217391% {
                transform: translateX(23vw) translateY(35vh) scale(0.79);
            }

            91.3043478261% {
                transform: translateX(22vw) translateY(-44vh) scale(1);
            }

            95.652173913% {
                transform: translateX(10vw) translateY(-43vh) scale(0.8);
            }

            100% {
                transform: translateX(-37vw) translateY(11vh) scale(0.41);
            }
        }

        .firefly:nth-child(2) {
            animation-name: move2;
        }

        .firefly:nth-child(2)::before {
            animation-duration: 16s;
        }

        .firefly:nth-child(2)::after {
            animation-duration: 16s, 7808ms;
            animation-delay: 0ms, 2774ms;
        }

        @keyframes move2 {
            0% {
                transform: translateX(16vw) translateY(45vh) scale(0.37);
            }

            5.5555555556% {
                transform: translateX(49vw) translateY(-19vh) scale(0.8);
            }

            11.1111111111% {
                transform: translateX(-3vw) translateY(25vh) scale(0.41);
            }

            16.6666666667% {
                transform: translateX(36vw) translateY(-5vh) scale(0.63);
            }

            22.2222222222% {
                transform: translateX(19vw) translateY(41vh) scale(0.27);
            }

            27.7777777778% {
                transform: translateX(-1vw) translateY(9vh) scale(0.97);
            }

            33.3333333333% {
                transform: translateX(37vw) translateY(-37vh) scale(0.96);
            }

            38.8888888889% {
                transform: translateX(23vw) translateY(16vh) scale(0.62);
            }

            44.4444444444% {
                transform: translateX(-40vw) translateY(-19vh) scale(0.73);
            }

            50% {
                transform: translateX(44vw) translateY(19vh) scale(0.39);
            }

            55.5555555556% {
                transform: translateX(49vw) translateY(49vh) scale(0.7);
            }

            61.1111111111% {
                transform: translateX(-8vw) translateY(-49vh) scale(0.44);
            }

            66.6666666667% {
                transform: translateX(-12vw) translateY(26vh) scale(0.49);
            }

            72.2222222222% {
                transform: translateX(2vw) translateY(-32vh) scale(0.88);
            }

            77.7777777778% {
                transform: translateX(-33vw) translateY(-9vh) scale(1);
            }

            83.3333333333% {
                transform: translateX(44vw) translateY(20vh) scale(0.57);
            }

            88.8888888889% {
                transform: translateX(9vw) translateY(6vh) scale(0.58);
            }

            94.4444444444% {
                transform: translateX(42vw) translateY(49vh) scale(0.8);
            }

            100% {
                transform: translateX(49vw) translateY(0vh) scale(0.51);
            }
        }

        .firefly:nth-child(3) {
            animation-name: move3;
        }

        .firefly:nth-child(3)::before {
            animation-duration: 10s;
        }

        .firefly:nth-child(3)::after {
            animation-duration: 10s, 7134ms;
            animation-delay: 0ms, 1877ms;
        }

        @keyframes move3 {
            0% {
                transform: translateX(15vw) translateY(-28vh) scale(0.68);
            }

            3.5714285714% {
                transform: translateX(0vw) translateY(-38vh) scale(0.44);
            }

            7.1428571429% {
                transform: translateX(11vw) translateY(45vh) scale(0.56);
            }

            10.7142857143% {
                transform: translateX(14vw) translateY(33vh) scale(0.89);
            }

            14.2857142857% {
                transform: translateX(16vw) translateY(16vh) scale(0.74);
            }

            17.8571428571% {
                transform: translateX(-2vw) translateY(-12vh) scale(0.95);
            }

            21.4285714286% {
                transform: translateX(14vw) translateY(10vh) scale(0.85);
            }

            25% {
                transform: translateX(-15vw) translateY(23vh) scale(0.76);
            }

            28.5714285714% {
                transform: translateX(34vw) translateY(38vh) scale(0.82);
            }

            32.1428571429% {
                transform: translateX(-26vw) translateY(-27vh) scale(0.31);
            }

            35.7142857143% {
                transform: translateX(-47vw) translateY(40vh) scale(0.62);
            }

            39.2857142857% {
                transform: translateX(-32vw) translateY(-47vh) scale(0.95);
            }

            42.8571428571% {
                transform: translateX(37vw) translateY(-48vh) scale(0.56);
            }

            46.4285714286% {
                transform: translateX(11vw) translateY(-44vh) scale(0.42);
            }

            50% {
                transform: translateX(11vw) translateY(-40vh) scale(0.6);
            }

            53.5714285714% {
                transform: translateX(-24vw) translateY(-21vh) scale(0.68);
            }

            57.1428571429% {
                transform: translateX(2vw) translateY(-25vh) scale(0.88);
            }

            60.7142857143% {
                transform: translateX(43vw) translateY(5vh) scale(0.75);
            }

            64.2857142857% {
                transform: translateX(17vw) translateY(42vh) scale(0.67);
            }

            67.8571428571% {
                transform: translateX(7vw) translateY(31vh) scale(0.87);
            }

            71.4285714286% {
                transform: translateX(30vw) translateY(31vh) scale(0.79);
            }

            75% {
                transform: translateX(-7vw) translateY(-24vh) scale(0.85);
            }

            78.5714285714% {
                transform: translateX(3vw) translateY(9vh) scale(0.83);
            }

            82.1428571429% {
                transform: translateX(-40vw) translateY(33vh) scale(0.95);
            }

            85.7142857143% {
                transform: translateX(1vw) translateY(-29vh) scale(0.65);
            }

            89.2857142857% {
                transform: translateX(44vw) translateY(-36vh) scale(0.75);
            }

            92.8571428571% {
                transform: translateX(35vw) translateY(-19vh) scale(0.91);
            }

            96.4285714286% {
                transform: translateX(-43vw) translateY(31vh) scale(0.98);
            }

            100% {
                transform: translateX(15vw) translateY(-2vh) scale(0.49);
            }
        }

        .firefly:nth-child(4) {
            animation-name: move4;
        }

        .firefly:nth-child(4)::before {
            animation-duration: 12s;
        }

        .firefly:nth-child(4)::after {
            animation-duration: 12s, 10287ms;
            animation-delay: 0ms, 1005ms;
        }

        @keyframes move4 {
            0% {
                transform: translateX(26vw) translateY(-6vh) scale(0.96);
            }

            4.347826087% {
                transform: translateX(50vw) translateY(-26vh) scale(0.4);
            }

            8.6956521739% {
                transform: translateX(15vw) translateY(-20vh) scale(0.53);
            }

            13.0434782609% {
                transform: translateX(13vw) translateY(3vh) scale(0.78);
            }

            17.3913043478% {
                transform: translateX(-13vw) translateY(-28vh) scale(0.65);
            }

            21.7391304348% {
                transform: translateX(39vw) translateY(-42vh) scale(0.79);
            }

            26.0869565217% {
                transform: translateX(7vw) translateY(46vh) scale(0.28);
            }

            30.4347826087% {
                transform: translateX(49vw) translateY(41vh) scale(0.55);
            }

            34.7826086957% {
                transform: translateX(34vw) translateY(-20vh) scale(0.79);
            }

            39.1304347826% {
                transform: translateX(-34vw) translateY(25vh) scale(0.35);
            }

            43.4782608696% {
                transform: translateX(23vw) translateY(-9vh) scale(0.71);
            }

            47.8260869565% {
                transform: translateX(24vw) translateY(13vh) scale(0.46);
            }

            52.1739130435% {
                transform: translateX(5vw) translateY(13vh) scale(0.56);
            }

            56.5217391304% {
                transform: translateX(-2vw) translateY(38vh) scale(0.55);
            }

            60.8695652174% {
                transform: translateX(-5vw) translateY(29vh) scale(0.7);
            }

            65.2173913043% {
                transform: translateX(-37vw) translateY(-32vh) scale(0.51);
            }

            69.5652173913% {
                transform: translateX(23vw) translateY(43vh) scale(0.75);
            }

            73.9130434783% {
                transform: translateX(-36vw) translateY(-20vh) scale(0.64);
            }

            78.2608695652% {
                transform: translateX(-20vw) translateY(-16vh) scale(0.99);
            }

            82.6086956522% {
                transform: translateX(36vw) translateY(-42vh) scale(0.62);
            }

            86.9565217391% {
                transform: translateX(-32vw) translateY(47vh) scale(0.34);
            }

            91.3043478261% {
                transform: translateX(24vw) translateY(2vh) scale(0.66);
            }

            95.652173913% {
                transform: translateX(24vw) translateY(29vh) scale(0.43);
            }

            100% {
                transform: translateX(5vw) translateY(-15vh) scale(0.89);
            }
        }

        .firefly:nth-child(5) {
            animation-name: move5;
        }

        .firefly:nth-child(5)::before {
            animation-duration: 11s;
        }

        .firefly:nth-child(5)::after {
            animation-duration: 11s, 6289ms;
            animation-delay: 0ms, 3443ms;
        }

        @keyframes move5 {
            0% {
                transform: translateX(-5vw) translateY(10vh) scale(0.7);
            }

            4.347826087% {
                transform: translateX(41vw) translateY(9vh) scale(0.49);
            }

            8.6956521739% {
                transform: translateX(-48vw) translateY(-44vh) scale(0.65);
            }

            13.0434782609% {
                transform: translateX(-36vw) translateY(-18vh) scale(0.29);
            }

            17.3913043478% {
                transform: translateX(-47vw) translateY(-25vh) scale(0.34);
            }

            21.7391304348% {
                transform: translateX(14vw) translateY(16vh) scale(0.74);
            }

            26.0869565217% {
                transform: translateX(-46vw) translateY(19vh) scale(0.78);
            }

            30.4347826087% {
                transform: translateX(46vw) translateY(20vh) scale(0.64);
            }

            34.7826086957% {
                transform: translateX(17vw) translateY(10vh) scale(0.59);
            }

            39.1304347826% {
                transform: translateX(-8vw) translateY(20vh) scale(0.59);
            }

            43.4782608696% {
                transform: translateX(36vw) translateY(9vh) scale(0.38);
            }

            47.8260869565% {
                transform: translateX(16vw) translateY(6vh) scale(0.85);
            }

            52.1739130435% {
                transform: translateX(-9vw) translateY(38vh) scale(0.61);
            }

            56.5217391304% {
                transform: translateX(-11vw) translateY(-2vh) scale(0.6);
            }

            60.8695652174% {
                transform: translateX(29vw) translateY(27vh) scale(0.77);
            }

            65.2173913043% {
                transform: translateX(-46vw) translateY(14vh) scale(0.39);
            }

            69.5652173913% {
                transform: translateX(-43vw) translateY(-5vh) scale(0.42);
            }

            73.9130434783% {
                transform: translateX(-13vw) translateY(-11vh) scale(0.46);
            }

            78.2608695652% {
                transform: translateX(26vw) translateY(32vh) scale(0.57);
            }

            82.6086956522% {
                transform: translateX(16vw) translateY(-27vh) scale(0.55);
            }

            86.9565217391% {
                transform: translateX(10vw) translateY(20vh) scale(0.48);
            }

            91.3043478261% {
                transform: translateX(-28vw) translateY(-35vh) scale(0.72);
            }

            95.652173913% {
                transform: translateX(32vw) translateY(-15vh) scale(0.7);
            }

            100% {
                transform: translateX(18vw) translateY(-3vh) scale(0.66);
            }
        }

        .firefly:nth-child(6) {
            animation-name: move6;
        }

        .firefly:nth-child(6)::before {
            animation-duration: 18s;
        }

        .firefly:nth-child(6)::after {
            animation-duration: 18s, 8213ms;
            animation-delay: 0ms, 1737ms;
        }

        @keyframes move6 {
            0% {
                transform: translateX(-40vw) translateY(29vh) scale(0.26);
            }

            5.8823529412% {
                transform: translateX(-35vw) translateY(-6vh) scale(0.87);
            }

            11.7647058824% {
                transform: translateX(32vw) translateY(3vh) scale(0.53);
            }

            17.6470588235% {
                transform: translateX(34vw) translateY(-2vh) scale(0.65);
            }

            23.5294117647% {
                transform: translateX(29vw) translateY(23vh) scale(0.29);
            }

            29.4117647059% {
                transform: translateX(-14vw) translateY(4vh) scale(0.77);
            }

            35.2941176471% {
                transform: translateX(-40vw) translateY(-47vh) scale(0.28);
            }

            41.1764705882% {
                transform: translateX(-22vw) translateY(-25vh) scale(0.3);
            }

            47.0588235294% {
                transform: translateX(4vw) translateY(16vh) scale(0.94);
            }

            52.9411764706% {
                transform: translateX(-26vw) translateY(24vh) scale(0.9);
            }

            58.8235294118% {
                transform: translateX(-13vw) translateY(22vh) scale(0.32);
            }

            64.7058823529% {
                transform: translateX(39vw) translateY(-10vh) scale(0.39);
            }

            70.5882352941% {
                transform: translateX(32vw) translateY(28vh) scale(0.36);
            }

            76.4705882353% {
                transform: translateX(-23vw) translateY(-49vh) scale(0.58);
            }

            82.3529411765% {
                transform: translateX(-39vw) translateY(29vh) scale(0.72);
            }

            88.2352941176% {
                transform: translateX(-28vw) translateY(39vh) scale(0.73);
            }

            94.1176470588% {
                transform: translateX(30vw) translateY(41vh) scale(0.99);
            }

            100% {
                transform: translateX(39vw) translateY(29vh) scale(0.31);
            }
        }

        .firefly:nth-child(7) {
            animation-name: move7;
        }

        .firefly:nth-child(7)::before {
            animation-duration: 10s;
        }

        .firefly:nth-child(7)::after {
            animation-duration: 10s, 6362ms;
            animation-delay: 0ms, 5511ms;
        }

        @keyframes move7 {
            0% {
                transform: translateX(41vw) translateY(49vh) scale(0.32);
            }

            5.8823529412% {
                transform: translateX(41vw) translateY(44vh) scale(0.47);
            }

            11.7647058824% {
                transform: translateX(-46vw) translateY(-29vh) scale(0.62);
            }

            17.6470588235% {
                transform: translateX(18vw) translateY(-36vh) scale(0.35);
            }

            23.5294117647% {
                transform: translateX(37vw) translateY(20vh) scale(0.93);
            }

            29.4117647059% {
                transform: translateX(18vw) translateY(-49vh) scale(0.54);
            }

            35.2941176471% {
                transform: translateX(3vw) translateY(-45vh) scale(0.37);
            }

            41.1764705882% {
                transform: translateX(-40vw) translateY(4vh) scale(0.86);
            }

            47.0588235294% {
                transform: translateX(-47vw) translateY(7vh) scale(0.81);
            }

            52.9411764706% {
                transform: translateX(36vw) translateY(-39vh) scale(0.31);
            }

            58.8235294118% {
                transform: translateX(-38vw) translateY(43vh) scale(0.64);
            }

            64.7058823529% {
                transform: translateX(36vw) translateY(26vh) scale(0.8);
            }

            70.5882352941% {
                transform: translateX(14vw) translateY(5vh) scale(0.93);
            }

            76.4705882353% {
                transform: translateX(2vw) translateY(48vh) scale(0.95);
            }

            82.3529411765% {
                transform: translateX(-35vw) translateY(11vh) scale(0.6);
            }

            88.2352941176% {
                transform: translateX(25vw) translateY(47vh) scale(1);
            }

            94.1176470588% {
                transform: translateX(24vw) translateY(-1vh) scale(0.52);
            }

            100% {
                transform: translateX(36vw) translateY(-31vh) scale(0.96);
            }
        }

        .firefly:nth-child(8) {
            animation-name: move8;
        }

        .firefly:nth-child(8)::before {
            animation-duration: 15s;
        }

        .firefly:nth-child(8)::after {
            animation-duration: 15s, 7005ms;
            animation-delay: 0ms, 7858ms;
        }

        @keyframes move8 {
            0% {
                transform: translateX(-48vw) translateY(-41vh) scale(0.94);
            }

            5.5555555556% {
                transform: translateX(-6vw) translateY(39vh) scale(0.68);
            }

            11.1111111111% {
                transform: translateX(1vw) translateY(19vh) scale(0.88);
            }

            16.6666666667% {
                transform: translateX(-29vw) translateY(-46vh) scale(0.61);
            }

            22.2222222222% {
                transform: translateX(27vw) translateY(48vh) scale(1);
            }

            27.7777777778% {
                transform: translateX(44vw) translateY(22vh) scale(0.74);
            }

            33.3333333333% {
                transform: translateX(-13vw) translateY(26vh) scale(0.83);
            }

            38.8888888889% {
                transform: translateX(31vw) translateY(5vh) scale(0.84);
            }

            44.4444444444% {
                transform: translateX(-45vw) translateY(-45vh) scale(0.56);
            }

            50% {
                transform: translateX(-18vw) translateY(34vh) scale(0.87);
            }

            55.5555555556% {
                transform: translateX(-41vw) translateY(0vh) scale(0.68);
            }

            61.1111111111% {
                transform: translateX(-36vw) translateY(42vh) scale(0.87);
            }

            66.6666666667% {
                transform: translateX(-8vw) translateY(-42vh) scale(0.3);
            }

            72.2222222222% {
                transform: translateX(43vw) translateY(0vh) scale(0.7);
            }

            77.7777777778% {
                transform: translateX(-43vw) translateY(-38vh) scale(0.42);
            }

            83.3333333333% {
                transform: translateX(3vw) translateY(6vh) scale(0.69);
            }

            88.8888888889% {
                transform: translateX(2vw) translateY(-45vh) scale(0.61);
            }

            94.4444444444% {
                transform: translateX(-49vw) translateY(-29vh) scale(0.35);
            }

            100% {
                transform: translateX(-18vw) translateY(35vh) scale(0.97);
            }
        }

        .firefly:nth-child(9) {
            animation-name: move9;
        }

        .firefly:nth-child(9)::before {
            animation-duration: 15s;
        }

        .firefly:nth-child(9)::after {
            animation-duration: 15s, 10896ms;
            animation-delay: 0ms, 5418ms;
        }

        @keyframes move9 {
            0% {
                transform: translateX(-23vw) translateY(-48vh) scale(0.42);
            }

            5.5555555556% {
                transform: translateX(4vw) translateY(32vh) scale(0.47);
            }

            11.1111111111% {
                transform: translateX(19vw) translateY(5vh) scale(0.97);
            }

            16.6666666667% {
                transform: translateX(23vw) translateY(27vh) scale(0.44);
            }

            22.2222222222% {
                transform: translateX(-14vw) translateY(8vh) scale(0.26);
            }

            27.7777777778% {
                transform: translateX(36vw) translateY(-8vh) scale(0.94);
            }

            33.3333333333% {
                transform: translateX(-24vw) translateY(-14vh) scale(0.27);
            }

            38.8888888889% {
                transform: translateX(33vw) translateY(29vh) scale(0.63);
            }

            44.4444444444% {
                transform: translateX(25vw) translateY(-2vh) scale(0.87);
            }

            50% {
                transform: translateX(-4vw) translateY(-14vh) scale(0.51);
            }

            55.5555555556% {
                transform: translateX(3vw) translateY(-11vh) scale(0.28);
            }

            61.1111111111% {
                transform: translateX(-23vw) translateY(-17vh) scale(0.34);
            }

            66.6666666667% {
                transform: translateX(-39vw) translateY(27vh) scale(0.38);
            }

            72.2222222222% {
                transform: translateX(-15vw) translateY(-16vh) scale(0.68);
            }

            77.7777777778% {
                transform: translateX(-5vw) translateY(4vh) scale(0.61);
            }

            83.3333333333% {
                transform: translateX(-9vw) translateY(-36vh) scale(0.87);
            }

            88.8888888889% {
                transform: translateX(-6vw) translateY(-31vh) scale(0.93);
            }

            94.4444444444% {
                transform: translateX(39vw) translateY(-28vh) scale(0.9);
            }

            100% {
                transform: translateX(0vw) translateY(-34vh) scale(0.54);
            }
        }

        .firefly:nth-child(10) {
            animation-name: move10;
        }

        .firefly:nth-child(10)::before {
            animation-duration: 13s;
        }

        .firefly:nth-child(10)::after {
            animation-duration: 13s, 7158ms;
            animation-delay: 0ms, 3592ms;
        }

        @keyframes move10 {
            0% {
                transform: translateX(-40vw) translateY(46vh) scale(0.78);
            }

            4% {
                transform: translateX(22vw) translateY(14vh) scale(0.43);
            }

            8% {
                transform: translateX(-5vw) translateY(-36vh) scale(0.86);
            }

            12% {
                transform: translateX(6vw) translateY(7vh) scale(0.29);
            }

            16% {
                transform: translateX(23vw) translateY(25vh) scale(0.43);
            }

            20% {
                transform: translateX(-5vw) translateY(19vh) scale(0.88);
            }

            24% {
                transform: translateX(-47vw) translateY(-4vh) scale(0.87);
            }

            28% {
                transform: translateX(15vw) translateY(31vh) scale(0.43);
            }

            32% {
                transform: translateX(-43vw) translateY(-9vh) scale(0.37);
            }

            36% {
                transform: translateX(-6vw) translateY(-44vh) scale(0.51);
            }

            40% {
                transform: translateX(33vw) translateY(-8vh) scale(0.35);
            }

            44% {
                transform: translateX(-1vw) translateY(45vh) scale(0.58);
            }

            48% {
                transform: translateX(-15vw) translateY(-35vh) scale(0.73);
            }

            52% {
                transform: translateX(5vw) translateY(23vh) scale(0.46);
            }

            56% {
                transform: translateX(27vw) translateY(-49vh) scale(0.7);
            }

            60% {
                transform: translateX(27vw) translateY(48vh) scale(0.63);
            }

            64% {
                transform: translateX(2vw) translateY(13vh) scale(0.97);
            }

            68% {
                transform: translateX(-46vw) translateY(13vh) scale(0.93);
            }

            72% {
                transform: translateX(13vw) translateY(-14vh) scale(0.53);
            }

            76% {
                transform: translateX(-41vw) translateY(-29vh) scale(0.64);
            }

            80% {
                transform: translateX(6vw) translateY(7vh) scale(0.73);
            }

            84% {
                transform: translateX(5vw) translateY(35vh) scale(0.59);
            }

            88% {
                transform: translateX(-30vw) translateY(43vh) scale(0.48);
            }

            92% {
                transform: translateX(4vw) translateY(-12vh) scale(0.27);
            }

            96% {
                transform: translateX(-43vw) translateY(9vh) scale(0.27);
            }

            100% {
                transform: translateX(27vw) translateY(-14vh) scale(0.67);
            }
        }

        .firefly:nth-child(11) {
            animation-name: move11;
        }

        .firefly:nth-child(11)::before {
            animation-duration: 18s;
        }

        .firefly:nth-child(11)::after {
            animation-duration: 18s, 10814ms;
            animation-delay: 0ms, 8085ms;
        }

        @keyframes move11 {
            0% {
                transform: translateX(35vw) translateY(-10vh) scale(0.72);
            }

            5.5555555556% {
                transform: translateX(-26vw) translateY(30vh) scale(0.73);
            }

            11.1111111111% {
                transform: translateX(-21vw) translateY(-9vh) scale(0.96);
            }

            16.6666666667% {
                transform: translateX(-1vw) translateY(-4vh) scale(0.99);
            }

            22.2222222222% {
                transform: translateX(-43vw) translateY(-22vh) scale(0.77);
            }

            27.7777777778% {
                transform: translateX(-26vw) translateY(-40vh) scale(0.77);
            }

            33.3333333333% {
                transform: translateX(33vw) translateY(-28vh) scale(0.9);
            }

            38.8888888889% {
                transform: translateX(0vw) translateY(30vh) scale(0.35);
            }

            44.4444444444% {
                transform: translateX(-34vw) translateY(-37vh) scale(0.35);
            }

            50% {
                transform: translateX(-18vw) translateY(15vh) scale(0.65);
            }

            55.5555555556% {
                transform: translateX(-26vw) translateY(-30vh) scale(0.27);
            }

            61.1111111111% {
                transform: translateX(34vw) translateY(36vh) scale(0.56);
            }

            66.6666666667% {
                transform: translateX(-41vw) translateY(10vh) scale(0.94);
            }

            72.2222222222% {
                transform: translateX(-1vw) translateY(-25vh) scale(0.29);
            }

            77.7777777778% {
                transform: translateX(8vw) translateY(-47vh) scale(0.6);
            }

            83.3333333333% {
                transform: translateX(17vw) translateY(-46vh) scale(0.96);
            }

            88.8888888889% {
                transform: translateX(24vw) translateY(45vh) scale(0.5);
            }

            94.4444444444% {
                transform: translateX(41vw) translateY(-11vh) scale(0.84);
            }

            100% {
                transform: translateX(43vw) translateY(6vh) scale(0.95);
            }
        }

        .firefly:nth-child(12) {
            animation-name: move12;
        }

        .firefly:nth-child(12)::before {
            animation-duration: 13s;
        }

        .firefly:nth-child(12)::after {
            animation-duration: 13s, 8430ms;
            animation-delay: 0ms, 3485ms;
        }

        @keyframes move12 {
            0% {
                transform: translateX(1vw) translateY(-13vh) scale(0.4);
            }

            3.5714285714% {
                transform: translateX(-45vw) translateY(12vh) scale(0.77);
            }

            7.1428571429% {
                transform: translateX(21vw) translateY(1vh) scale(0.43);
            }

            10.7142857143% {
                transform: translateX(10vw) translateY(-4vh) scale(0.9);
            }

            14.2857142857% {
                transform: translateX(16vw) translateY(-49vh) scale(0.9);
            }

            17.8571428571% {
                transform: translateX(-47vw) translateY(31vh) scale(0.39);
            }

            21.4285714286% {
                transform: translateX(24vw) translateY(9vh) scale(0.87);
            }

            25% {
                transform: translateX(-45vw) translateY(15vh) scale(0.75);
            }

            28.5714285714% {
                transform: translateX(40vw) translateY(-16vh) scale(0.96);
            }

            32.1428571429% {
                transform: translateX(37vw) translateY(-29vh) scale(0.51);
            }

            35.7142857143% {
                transform: translateX(-11vw) translateY(-30vh) scale(0.62);
            }

            39.2857142857% {
                transform: translateX(13vw) translateY(25vh) scale(0.43);
            }

            42.8571428571% {
                transform: translateX(8vw) translateY(-44vh) scale(0.96);
            }

            46.4285714286% {
                transform: translateX(-32vw) translateY(-4vh) scale(0.31);
            }

            50% {
                transform: translateX(29vw) translateY(0vh) scale(0.59);
            }

            53.5714285714% {
                transform: translateX(18vw) translateY(24vh) scale(0.69);
            }

            57.1428571429% {
                transform: translateX(29vw) translateY(-45vh) scale(0.93);
            }

            60.7142857143% {
                transform: translateX(-5vw) translateY(0vh) scale(0.39);
            }

            64.2857142857% {
                transform: translateX(-49vw) translateY(47vh) scale(0.34);
            }

            67.8571428571% {
                transform: translateX(39vw) translateY(-39vh) scale(0.48);
            }

            71.4285714286% {
                transform: translateX(-3vw) translateY(10vh) scale(0.98);
            }

            75% {
                transform: translateX(39vw) translateY(-6vh) scale(0.43);
            }

            78.5714285714% {
                transform: translateX(-37vw) translateY(-11vh) scale(0.49);
            }

            82.1428571429% {
                transform: translateX(14vw) translateY(26vh) scale(0.33);
            }

            85.7142857143% {
                transform: translateX(-19vw) translateY(9vh) scale(0.91);
            }

            89.2857142857% {
                transform: translateX(26vw) translateY(-41vh) scale(0.85);
            }

            92.8571428571% {
                transform: translateX(47vw) translateY(38vh) scale(0.8);
            }

            96.4285714286% {
                transform: translateX(15vw) translateY(14vh) scale(0.4);
            }

            100% {
                transform: translateX(8vw) translateY(-29vh) scale(0.73);
            }
        }

        .firefly:nth-child(13) {
            animation-name: move13;
        }

        .firefly:nth-child(13)::before {
            animation-duration: 12s;
        }

        .firefly:nth-child(13)::after {
            animation-duration: 12s, 5254ms;
            animation-delay: 0ms, 1871ms;
        }

        @keyframes move13 {
            0% {
                transform: translateX(25vw) translateY(42vh) scale(0.47);
            }

            5.8823529412% {
                transform: translateX(17vw) translateY(35vh) scale(0.77);
            }

            11.7647058824% {
                transform: translateX(-36vw) translateY(30vh) scale(0.53);
            }

            17.6470588235% {
                transform: translateX(13vw) translateY(37vh) scale(0.28);
            }

            23.5294117647% {
                transform: translateX(-47vw) translateY(21vh) scale(0.84);
            }

            29.4117647059% {
                transform: translateX(-26vw) translateY(-34vh) scale(0.38);
            }

            35.2941176471% {
                transform: translateX(18vw) translateY(41vh) scale(0.42);
            }

            41.1764705882% {
                transform: translateX(42vw) translateY(-20vh) scale(0.35);
            }

            47.0588235294% {
                transform: translateX(5vw) translateY(25vh) scale(0.82);
            }

            52.9411764706% {
                transform: translateX(-7vw) translateY(26vh) scale(0.49);
            }

            58.8235294118% {
                transform: translateX(-47vw) translateY(-33vh) scale(0.46);
            }

            64.7058823529% {
                transform: translateX(6vw) translateY(-47vh) scale(0.51);
            }

            70.5882352941% {
                transform: translateX(47vw) translateY(-30vh) scale(0.6);
            }

            76.4705882353% {
                transform: translateX(-20vw) translateY(49vh) scale(0.53);
            }

            82.3529411765% {
                transform: translateX(-32vw) translateY(-26vh) scale(0.42);
            }

            88.2352941176% {
                transform: translateX(18vw) translateY(0vh) scale(0.69);
            }

            94.1176470588% {
                transform: translateX(-38vw) translateY(13vh) scale(0.55);
            }

            100% {
                transform: translateX(14vw) translateY(23vh) scale(0.99);
            }
        }

        .firefly:nth-child(14) {
            animation-name: move14;
        }

        .firefly:nth-child(14)::before {
            animation-duration: 12s;
        }

        .firefly:nth-child(14)::after {
            animation-duration: 12s, 6364ms;
            animation-delay: 0ms, 7725ms;
        }

        @keyframes move14 {
            0% {
                transform: translateX(-36vw) translateY(40vh) scale(0.42);
            }

            3.8461538462% {
                transform: translateX(2vw) translateY(33vh) scale(0.48);
            }

            7.6923076923% {
                transform: translateX(32vw) translateY(19vh) scale(0.43);
            }

            11.5384615385% {
                transform: translateX(-12vw) translateY(-20vh) scale(0.88);
            }

            15.3846153846% {
                transform: translateX(27vw) translateY(17vh) scale(0.32);
            }

            19.2307692308% {
                transform: translateX(40vw) translateY(7vh) scale(0.86);
            }

            23.0769230769% {
                transform: translateX(-45vw) translateY(22vh) scale(0.76);
            }

            26.9230769231% {
                transform: translateX(-38vw) translateY(5vh) scale(0.71);
            }

            30.7692307692% {
                transform: translateX(40vw) translateY(-6vh) scale(0.75);
            }

            34.6153846154% {
                transform: translateX(41vw) translateY(26vh) scale(0.38);
            }

            38.4615384615% {
                transform: translateX(47vw) translateY(-26vh) scale(0.37);
            }

            42.3076923077% {
                transform: translateX(30vw) translateY(-35vh) scale(0.61);
            }

            46.1538461538% {
                transform: translateX(-25vw) translateY(5vh) scale(0.34);
            }

            50% {
                transform: translateX(17vw) translateY(21vh) scale(0.72);
            }

            53.8461538462% {
                transform: translateX(-33vw) translateY(0vh) scale(1);
            }

            57.6923076923% {
                transform: translateX(31vw) translateY(36vh) scale(0.83);
            }

            61.5384615385% {
                transform: translateX(-49vw) translateY(21vh) scale(0.94);
            }

            65.3846153846% {
                transform: translateX(-9vw) translateY(-49vh) scale(0.65);
            }

            69.2307692308% {
                transform: translateX(-3vw) translateY(49vh) scale(0.41);
            }

            73.0769230769% {
                transform: translateX(-38vw) translateY(-44vh) scale(0.99);
            }

            76.9230769231% {
                transform: translateX(39vw) translateY(-39vh) scale(0.37);
            }

            80.7692307692% {
                transform: translateX(12vw) translateY(-32vh) scale(0.74);
            }

            84.6153846154% {
                transform: translateX(-43vw) translateY(-45vh) scale(0.57);
            }

            88.4615384615% {
                transform: translateX(26vw) translateY(-16vh) scale(0.98);
            }

            92.3076923077% {
                transform: translateX(-46vw) translateY(23vh) scale(0.68);
            }

            96.1538461538% {
                transform: translateX(19vw) translateY(-31vh) scale(0.81);
            }

            100% {
                transform: translateX(2vw) translateY(-33vh) scale(0.41);
            }
        }

        .firefly:nth-child(15) {
            animation-name: move15;
        }

        .firefly:nth-child(15)::before {
            animation-duration: 18s;
        }

        .firefly:nth-child(15)::after {
            animation-duration: 18s, 7320ms;
            animation-delay: 0ms, 6817ms;
        }

        @keyframes move15 {
            0% {
                transform: translateX(22vw) translateY(-26vh) scale(0.59);
            }

            5.5555555556% {
                transform: translateX(-41vw) translateY(35vh) scale(0.64);
            }

            11.1111111111% {
                transform: translateX(-8vw) translateY(0vh) scale(0.37);
            }

            16.6666666667% {
                transform: translateX(9vw) translateY(44vh) scale(0.39);
            }

            22.2222222222% {
                transform: translateX(-4vw) translateY(-16vh) scale(0.53);
            }

            27.7777777778% {
                transform: translateX(-47vw) translateY(19vh) scale(0.67);
            }

            33.3333333333% {
                transform: translateX(-32vw) translateY(-16vh) scale(0.78);
            }

            38.8888888889% {
                transform: translateX(-9vw) translateY(32vh) scale(0.95);
            }

            44.4444444444% {
                transform: translateX(-9vw) translateY(24vh) scale(0.3);
            }

            50% {
                transform: translateX(-25vw) translateY(-44vh) scale(0.59);
            }

            55.5555555556% {
                transform: translateX(-22vw) translateY(-13vh) scale(0.83);
            }

            61.1111111111% {
                transform: translateX(-20vw) translateY(17vh) scale(0.34);
            }

            66.6666666667% {
                transform: translateX(-12vw) translateY(27vh) scale(0.75);
            }

            72.2222222222% {
                transform: translateX(-17vw) translateY(-34vh) scale(0.87);
            }

            77.7777777778% {
                transform: translateX(37vw) translateY(-45vh) scale(0.59);
            }

            83.3333333333% {
                transform: translateX(49vw) translateY(-41vh) scale(0.6);
            }

            88.8888888889% {
                transform: translateX(47vw) translateY(3vh) scale(0.81);
            }

            94.4444444444% {
                transform: translateX(14vw) translateY(-4vh) scale(0.39);
            }

            100% {
                transform: translateX(-35vw) translateY(4vh) scale(0.89);
            }
        }

        @keyframes drift {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes flash {

            0%,
            30%,
            100% {
                opacity: 0;
                box-shadow: 0 0 0vw 0vw yellow;
            }

            5% {
                opacity: 1;
                box-shadow: 0 0 2vw 0.4vw yellow;
            }
        }
    </style>
</head>

<body>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container ">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    Midnight Music
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ">
                        @auth
                        <li class="nav-item ">
                            <a class="text-white nav-link @if(url()->current() == route('posts.create')) active @endif" href="{{ route('posts.create') }}">Create A Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link @if(url()->current() == route('posts.index')) active @endif" href="{{ route('posts.index') }}">My Posts</a>
                        </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="text-white nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="text-white nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session()->has('success'))
    <script>
        Swal.fire(
            'Good job!',
            "{{session()->get('success')}}",
            'success'
        )
    </script>
    @endif
</body>

</html>