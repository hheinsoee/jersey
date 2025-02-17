<?php
include(__DIR__ . "/function.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= siteinfo('name'); ?></title>
    <meta name="description" content="<?= siteinfo('description'); ?>">
    <meta name="theme-color" content="#000000">

    <!-- open graph -->
    <meta property="og:image" content="https://font.rakhineyouthfutsal.com/font.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="<?= siteinfo('description'); ?>" />
    <meta property="og:title" content="<?= siteinfo('name'); ?>" />
    <meta property="og:url" content="https://font.rakhineyouthfutsal.com" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= siteinfo('name'); ?> | <?= siteinfo('description'); ?>" />

    <!-- twitter -->
    <meta name="twitter:title" content="<?= siteinfo('name'); ?>" />
    <meta name="twitter:description" content="<?= siteinfo('description'); ?>" />
    <meta name="twitter:url" content="https://font.rakhineyouthfutsal.com" />
    <meta name="twitter:image" content="https://font.rakhineyouthfutsal.com/font.jpg" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- vefifying & contact-->
    <meta name="facebook-domain-verification" content="" />
    <meta property="fb:app_id" content="2824369061207392" />

    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #ffffff;
            cursor: default;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .input {
            padding: 10px;
            position: sticky;
            bottom: 0;
            background-color: #440044;
            color: #efefef;

            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .input input {
            background-color: transparent;
            border: none;
            color: #efefef;
            outline: none;
            padding: 10px;
        }

        /* .font {
            font-size: 10vmin;
            line-height: 20vmin;
            vertical-align: baseline;

            display: flex;
            align-items: flex-start;
            min-height: 200px; 
        } */

        #jersey_back {
            padding: 3vh;
        }

        #jersey_back .name {
            font-size: 4vh;
            line-height: 8vh;
        }

        #jersey_back .number {
            font-size: 16vh;
            line-height: 16vh;
        }

        .name,.number {
            font-size: 30pt;
            line-height: 30pt;
            padding: 0px 15px;
        }

        .box {
            height: auto;
            padding: 10px;
            background: #222222;
        }

        .box:nth-child(odd) {
            background: #333333;
        }

        .box:hover {
            color: #ffffff;
            background: linear-gradient(135deg, #aa0000, #0000aa)
        }

        <?php
        foreach (getFontList() as $f) {
        ?>@font-face {
            font-family: <?= $f['id']; ?>;
            src: url(<?= $f['url']; ?>);
        }

        .<?= $f['id']; ?> {
            font-family: <?= $f['id']; ?>;
        }

        <?php
        }
        ?>.shirt {
            height: 50vh;
        }

        @media screen and (min-width: 1000px) {
            .container {
                display: flex;
                justified-content: space-between;
                flex-wrap: wrap
            }

            .shirt {
                height: 90vmin;
            }

            #jersey_back {
                padding: 5vmin;
            }

            #jersey_back .name {
                font-size: 5vmin;
                line-height: 10vmin;
            }

            #jersey_back .number {
                font-size: 25vmin;
                line-height: 30vmin;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="flex:1;position: sticky;top:0;z-index:1;background:linear-gradient(180deg, black 90%, transparent);">
            <div style="position: sticky;top:0;">
                <center>
                    <i style="opacity: 0.5;" id="selected_fontname">fffriverplate2019</i>
                </center>
                <center class="shirt" style=" background-image: url(<?= myurl('/assets/kits/m21-back-red-white.svg'); ?>);
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                margin:auto;
                ">
                    <div class="fffriverplate2019" id="jersey_back">
                        <div class="name" id="name">HEIN SOE</div>
                        <div class="number" id="number">99</div>
                    </div>
                </center>
            </div>

        </div>




        <div style="flex: 1;">
            <?php
            foreach (getFontList() as $f) {
            ?>
                <div class="box" onclick="change_font_in_sersey('<?= $f['id']; ?>')">
                    <center>
                        <div class="<?= $f['id']; ?>">
                            <span class="number" id="number">99</span>
                            <span class="name" id="name">HEIN SOE</span>
                        </div>
                        <small style="opacity: 0.5;"><?= $f['name']; ?></small>
                    </center>
                </div>
            <?php
            }; ?>


            <div class="input">
                <div>name:<input type="text" name="name" id="input_name" placeholder="player name" onchange="change_name(this.value)" value="HEIN SOE"></div>
                <div>number:<input type="number" name="number" max="99" id="input_number" placeholder="number" onchange="change_number(this.value)" value="99"></div>

            </div>
        </div>



    </div>

    <script>
        function change_name(name) {
            // document.getElementById('input_name').value;

            var elements = document.querySelectorAll('[id=name]');
            for (var i = 0; i < elements.length; i++) {
                elements[i].innerHTML = name;
            }
        }

        function change_number(n) {
            // document.getElementById('input_number').value;

            var elements = document.querySelectorAll('[id=number]');
            for (var i = 0; i < elements.length; i++) {
                elements[i].innerHTML = n;
            }
        }

        function change_font_in_sersey(fontId) {
            var elements = document.querySelectorAll('[id=jersey_back]');
            for (var i = 0; i < elements.length; i++) {
                elements[i].className = fontId;
            }
            document.getElementById("selected_fontname").innerHTML = fontId;
        }
    </script>
</body>

</html>