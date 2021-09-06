<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,500,600,700" rel="stylesheet">
    <!-- ./fonts -->

    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            height: 100%;
            margin: 0px;
        }

        body {
            width: 21cm;
            height: 100%;
            min-height: 29.7cm;
            position: relative;
            margin: 0;
            padding: 0 0;
            color: #333;
            line-height: 22px;
            /*font: 13 px "Source Sans Pro", Arial;*/
            font: 13px "Source Sans Pro", Arial;
            font-style: normal
        }

        h1 {
            text-transform: uppercase;
            font-style: normal;
            font-size: 30px;
            margin: 0;
            padding: 25px 25px 15px 25px;
            font-weight: 600;
            letter-spacing: .15em
        }

        h2 {
            text-transform: uppercase;
            font-size: 16px;
            font-weight: 600;
            margin: 0;
            padding: 0;
            letter-spacing: .15em
        }

        h3 {
            font-size: 14px;
            font-weight: 600;
            margin: 0;
            padding: 0
        }

        p {
            color: #4c4c4c;
            line-height: 18px;
            font-weight: 400;
            margin: 0;
            padding: 0
        }

        hr {
            border: none;
            height: 1px;
            width: 100%;
            padding: 0;
            margin: 0;
            background: #d2d2d2
        }

        .section--name {
            display: block;
            padding: 0 0 10px 0;
            text-align: center;
            position: fixed;
            top: 20px;
            left: 20px;
            width: 752px;
            overflow-x: hidden;
            overflow-y: hidden;
            background: #fff;
            z-index: 999;
            border: 2px solid #000
        }

        .sections {
            left: 300px;
            top: 140px;
            position: relative;
            width: 470px;
            margin-top: -7px
        }

        .sections .section:nth-child(1) .section--title {
            padding-top: 0;
            border: none;
            margin-top: -20px
        }

        .section {
            position: relative;
            width: 100%;
            padding: 0
        }

        .section p {
            display: block;
            font-style: normal
        }

        .section:last-child {
            border: none
        }

        .section.section--summary {
            margin-bottom: 17px
        }

        .section--title {
            display: inline-block;
            position: relative;
            width: 100%;
            z-index: 99;
            margin: 0;
            font-weight: 600;
            background: #fff;
            padding: 19px 0 0 0;
            border-top: 1px solid #d2d2d2;
            page-break-inside: avoid
        }

        .section--title span {
            display: inline-block;
            margin-right: 2px
        }

        .section--title-icon {
            position: relative;
            top: 2px;
            display: inline-block;
            height: 32px;
            width: 32px;
            margin-left: -15px;
            margin-right: 0;
            background: #fff
        }

        .section--title-icon svg {
            position: relative;
            top: 3px;
            height: 22px;
            fill: #2b2b38
        }

        .section--title-icon.education svg {
            left: 2px
        }

        .section--title-icon.course svg {
            top: 4px;
            left: 3px
        }

        .section--title-icon.work svg {
            left: 3px
        }

        .section--title-icon.certificate svg {
            top: 4px;
            left: 3px
        }

        .section--title-icon.single-textarea svg {
            top: 4px;
            left: 3px
        }

        .section--title-icon.extra-curricular svg {
            top: 3px;
            left: 3px
        }

        .section--title-icon.internships svg {
            left: 3px
        }

        .section--title-icon.skill svg {
            top: 4px;
            left: 3px
        }

        .section--title-icon.reference svg {
            top: 4px;
            left: 6px
        }

        .section--time-line-overlay {
            position: absolute;
            top: 0;
            left: 10px;
            height: 100%;
            width: 1px;
            background: #2b2b38
        }

        .section--time-line {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 1px;
            background: #2b2b38
        }

        .section--time-line-hide-overlay {
            display: none;
            position: absolute;
            left: -5px;
            top: 30px;
            width: 10px;
            height: 100%;
            background: #fff;
            z-index: 9
        }

        .section--item:last-child {
            background: #fff;
            padding-bottom: 15px
        }

        .section--item:last-child .section--time-line {
            height: 30px
        }

        .section--item:last-child .section--time-line-hide-overlay {
            display: inline
        }

        .section--time-line-dot {
            position: absolute;
            left: 0;
            top: 24px;
            height: 1px;
            width: 12px;
            border-radius: 50%;
            background: #2b2b38
        }

        .section--heading-group {
            display: block;
            margin: 0;
            padding: 0 0 6px 0;
            page-break-inside: avoid !important
        }

        .section--list {
            display: block;
            list-style: none;
            padding: 0;
            margin: 0
        }

        .section--list.skills {
            padding-top: 5px;
            margin-bottom: 20px
        }

        .section--list.no-indent .section--item {
            padding-left: 0
        }

        .section--item {
            display: block;
            position: relative;
            list-style: none;
            padding: 0;
            margin: 0
        }

        .section--item.skills {
            display: inline-block;
            padding-top: 5px;
            padding-bottom: 0;
            width: 100%;
            margin: 0
        }

        .section--item.skills h3 {
            font-size: 13px;
        }

        .section--item.skills:last-child {
            padding-bottom: 0
        }

        .skills--label {
            display: inline-block;
            width: 175px;
            margin: 0
        }

        .skills--stars {
            display: inline-block;
            position: relative;
            top: 4px
        }

        .skills--stars svg {
            fill: #b1b1b1
        }

        .skills--stars svg.active {
            fill: #2b2b38
        }

        .section--date {
            position: absolute;
            right: 0;
            text-align: right;
            top: 12px;
            width: 120px;
            font-size: 13px;
            padding: 0;
            margin: 0
        }

        .section--heading {
            display: block;
            padding: 10px 0 0 0;
            margin: 0
        }

        .section--sub-heading {
            display: block;
            padding: 0;
            margin: 0;
            font-size: 13px;
        }

        .section--content {
            display: block;
            padding: 0;
            margin: 0
        }

        .section--content p {
            display: block
        }

        ul {
            font-size: 15px;
            line-height: 1;
        }

        ul,
        ul>li {
            list-style: none;
        }

        .section--content ol,
        .section--content ul {
            page-break-inside: auto;
            white-space: normal;
            font-weight: 400;
            list-style-position: outside;
            color: #4c4c4c;
            margin: 0;
            padding: 0 0 0 16px
        }

        .section--content ol li,
        .section--content ul li {
            line-height: 18px
        }

        .section--content ul li {
            list-style-type: disc
        }

        .section--content ol {
            padding-left: 14px
        }

        .section--content-single-textarea {
            padding-top: 10px;
            padding-bottom: 15px
        }

        .sidebar--bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 275px;
            background: #e9e9e9;
            height: 18000px;
            overflow-x: hidden;
            overflow-y: hidden
        }

        .sidebar {
            top: 100px;
            left: 0;
            position: fixed;
            z-index: 1;
            padding: 10px 0 0 20px;
            width: 275px;
            height: auto
        }

        .avatar {
            top: 27px;
            left: 20px;
            position: absolute;
            display: inline-block;
            padding: 0;
            margin: 0;
            z-index: 99999;
            height: 92px;
            width: 100px;
            -webkit-background-size: cover !important;
            background-size: cover !important;
            background-position: center center !important;
            border: 2px solid #483b3b
        }

        .avatar--bg-rectangle {
            position: absolute;
            z-index: 0;
            top: 0;
            left: 0;
            width: 215px;
            height: 120px;
            background: #4e6671
        }

        .avatar--bg-circle {
            position: absolute;
            display: inline;
            z-index: 0;
            top: 8px;
            left: 0;
            border-radius: 100%;
            width: 215px;
            height: 200px;
            background: #4e6671
        }

        .img--avatar {
            width: 100%;
            height: 100%;
        }

        .sidebar--data {
            display: block
        }

        .sidebar--title {
            font-size: 17px;
            font-weight: 600;
            width: 88%;
            padding: 20px 0 0 0;
            margin: 0 0 10px 0;
            letter-spacing: .15em;
            page-break-inside: avoid
        }

        .sidebar--title span {
            float: left;
            display: inline;
            padding-right: 2px;
            z-index: 1
        }



        .sidebar--title span:last-child {
            padding-right: 10px
        }

        .sidebar--title hr {
            position: absolute;
            left: 0;
            bottom: 18px;
            border: none;
            height: 1px;
            width: calc(100% - 10px);
            background: #fff
        }

        .sidebar--title svg {
            position: relative;
            top: 4px;
            margin-right: 4px
        }

        .sidebar--label {
            font-weight: 600
        }

        .sidebar--list {
            display: block;
            list-style: none;
            margin: 0;
            padding: 0
        }

        .sidebar--item {
            display: block;
            list-style: none;
            position: relative;
            font-size: 12px;
            margin: 0;
            padding: 0 5px 5px 0
        }

        .sidebar--item.sidebar--item-personal {
            padding: 0 5px 5px 0
        }

        .sidebar--item.sidebar--item-interest {
            padding-left: 15px;
            padding-bottom: 0
        }

        .sidebar--item:last-child {
            padding-bottom: 0
        }

        .sidebar--icon-square {
            display: inline-block;
            height: 7px;
            width: 7px;
            position: absolute;
            top: 8px;
            margin: 0 5px 0 0;
            background: #333;
            left: 0;
            border-radius: 1px
        }

        .sidebar--item-icon {
            top: 2px;
            left: -8px;
            position: absolute;
            fill: #fff;
            height: 15px
        }

        .sidebar--item-text {
            line-height: 21px
        }

        .sidebar--item-align-right {
            float: right;
            margin-right: 20px
        }

        .skills__list {
            position: relative;
            display: inline-block;
            list-style: none;
            margin: 0;
            padding: 0;
            top: 2px
        }

        .skills__item {
            display: inline-block;
            height: 9px;
            width: 9px;
            margin: 0 3px 0 0;
            border-radius: 50%;
            opacity: .3;

        }

        .skills__item.active {
            opacity: 1
        }

        body.c--333333 {
            color: #333 !important
        }

        .c--333333 .sidebar--bg {
            background: #dfefd9 !important
        }

        .c--333333 .section--name {
            border-color: #333 !important
        }

        .c--333333 .sidebar--icon-square {
            background: #333 !important
        }

        .c--333333 .skills__item {
            border-color: #333 !important
        }

        body.c--4e473f {
            color: #4e473f !important
        }

        .c--4e473f .sidebar--bg {
            background: #f1ede9 !important
        }

        .c--4e473f .section--name {
            border-color: #4e473f !important
        }

        .c--4e473f .sidebar--icon-square {
            background: #4e473f !important
        }

        .c--4e473f .skills__item {
            border-color: #4e473f !important
        }

        body.c--243526 {
            color: #243526 !important
        }

        .c--243526 .sidebar--bg {
            background: #e9f1ea !important
        }

        .c--243526 .section--name {
            border-color: #243526 !important
        }

        .c--243526 .sidebar--icon-square {
            background: #243526 !important
        }

        .c--243526 .skills__item {
            border-color: #243526 !important
        }

        body.c--4e473f {
            color: #493b3b !important
        }

        .c--4e473f .sidebar--bg {
            background: #f1e9e9 !important
        }

        .c--4e473f .section--name {
            border-color: #493b3b !important
        }

        .c--4e473f .sidebar--icon-square {
            background: #493b3b !important
        }

        .c--4e473f .skills__item {
            border-color: #493b3b !important
        }

        .section--item:last-child {
            padding-bottom: 0 !important;
        }
    </style>

</head>

<body class="c--333333" style="overflow: hidden !important;">


    <?php
    if ($avatar != null) {
        $path = 'avatar/' . $avatar;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        echo '<div class="avatar"><img class="img--avatar" src="' . $base64 . '" /></div>';
    }
    ?>


    <div class="sidebar--bg"></div>

    <div class="section--name" style="text-align: center;">
        <h1>
            <?= $firstName . ' ' . $lastName; ?>
        </h1>
    </div>

    <aside class="sidebar">

        <div class="sidebar--data">
            <h2 class="sidebar--title">
                Pribadi
            </h2>

            <div class="sidebar--list">
                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Nama</span><br>
                    <?= ucwords($firstName) ?> <?= ucwords($lastName) ?>
                </li>

                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Alamat</span><br>
                    <?= ucwords($meta_streetName); ?>
                    <?= $meta_postalCode . ' ' . ucwords($meta_city); ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Nomor telepon</span><br>
                    <?= $meta_phoneNumber; ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Email</span><br>
                    <?= $email; ?>
                </li>

                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Tanggal lahir</span><br>
                    <?= date('d-m-Y', strtotime($meta_dateOfBirth)); ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Tempat lahir</span><br>
                    <?= ucwords($meta_placeOfBirth) ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Jenis kelamin</span><br>
                    <?php if ($meta_gender = "m") {
                    ?>
                        Laki-laki
                    <?php
                    } elseif ($meta_gender = "f") {
                    ?>
                        Perempuan
                    <?php
                    } else {
                    ?>

                    <?php
                    } ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Kebangsaan</span><br>
                    <?= ucwords($meta_nationality); ?>
                </li>

                <li class="sidebar--item sidebatttttr--item-personal">
                    <span class="sidebar--label">Status pernikahan</span><br>
                    <?= ucwords($meta_maritalStatus); ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">SIM</span><br>
                    <?= $meta_drivingLicenses; ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">Website</span><br>
                    <?= $meta_website; ?>
                </li>


                <li class="sidebar--item sidebar--item-personal">
                    <span class="sidebar--label">LinkedIn</span><br>
                    <?= $meta_linkedin; ?>
                </li>

            </div>

        </div>









        <div class="sidebar--data">
            <h2 class="sidebar--title">
                Minat
            </h2>

            <?php
            foreach ($hobby_name as $hoby) {
                if ($hoby != null) {
            ?> <ul class="sidebar--list">
                        <li class="sidebar--item sidebar--item-text sidebar--item-interest">
                            <i class="sidebar--icon-square"></i>
                            <?= ucwords($hoby) ?>
                        </li>
                    </ul>

            <?php }
            };
            ?>

        </div>



















    </aside>

    <section class="sections">




        <div class="section section--summary">

            <div class="section--content">
                <p><?= ucfirst($profile_description); ?></p>
            </div>
        </div>










        <div class="section">

            <div class="section--title">
                <h2>
                    Pengalaman kerja
                </h2>
            </div>

            <?php
            foreach ($work_function as list($function, $city, $employer, $startMonth, $startYear, $endMonth, $endYear)) {
            ?>
                <?php if ($employer != null) {
                ?>
                    <ol class="section--list no-indent">
                        <li class="section--item">
                            <div class="section--heading-group">
                                <div class="section--date">
                                    <?php if ($startMonth == '0') {
                                        if ($endMonth == 'tersembunyi') {
                                            echo ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear . ' - ' .  date('M ') . $endYear . '<br>';
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth == 'tersembunyi') {
                                        if ($endMonth == '0') {
                                            echo $startYear . ' - ';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo $startYear . ' - ' .  $endYear;
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear . ' - ' .  date('M') . $endYear . '<br>';
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth ==  '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                        if ($endMonth == '0') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' . '<br>';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M') . $endYear . '<br>';
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } ?>
                                </div>
                                <div class="section--heading">
                                    <h3><?= ucwords($function); ?></h3>
                                </div>
                                <div class="section--sub-heading">
                                    <?= ucwords($employer); ?> , <?= ucwords($city); ?> </div>
                            </div>
                        </li>
                    </ol>
                <?php
                }
                ?>


            <?php
            }
            ?>
        </div>






        <div class="section">
            <div class="section--title">
                <h2>
                    Pendidikan dan Kualifikasi
                </h2>
            </div>

            <?php
            foreach ($education_name as list($name, $city, $institution, $startMonth, $startYear, $endMonth, $endYear)) {
            ?>
                <?php if ($institution != null) {
                ?>
                    <ol class="section--list">
                        <li class="section--item">
                            <div class="section--heading-group">
                                <div class="section--date">
                                    <?php if ($startMonth == '0') {
                                        if ($endMonth == 'tersembunyi') {
                                            echo ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear;
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth == 'tersembunyi') {
                                        if ($endMonth == '0') {
                                            echo $startYear . ' - ';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo $startYear . ' - ' .  $endYear;
                                        } elseif ($endMonth == 'now') {
                                            echo  $startYear;
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } elseif ($startMonth ==  '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                        if ($endMonth == '0') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' . '<br>';
                                        } elseif ($endMonth == 'tersembunyi') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  $endYear . '<br>';
                                        } elseif ($endMonth == 'now') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear));
                                        } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                                            echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
                                        }
                                    } ?>
                                </div>
                                <div class="section--heading">
                                    <h3><?= ucwords($name); ?></h3>
                                </div>
                                <div class="section--sub-heading">
                                    <?= ucwords($institution); ?>, <?= ucwords($city); ?> </div>
                            </div>
                            <div class="section--content">

                            </div>
                        </li>
                    </ol>
                <?php
                }
                ?>

            <?php
            }
            ?>
        </div>












        <div class="section">

            <div class="section--title">
                <h2>
                    Keahlian
                </h2>
            </div>


            <div class="section--list skills">

                <?php
                $path = 'img/circle.png';
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $stars = 'data:image/' . $type . ';base64,' . base64_encode($data);
                foreach ($skill_name as list($name, $level)) {
                ?>
                    <div class="section--item skills">
                        <div class="skills--label">
                            <h3><?= ucwords($name); ?></h3>
                        </div>

                        <div class="skills__list">
                            <?php if ($level == "100") {
                            ?>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>

                            <?php
                            } elseif ($level == "75") {
                            ?>

                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>

                            <?php
                            } elseif ($level == "50") {
                            ?>

                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>

                            <?php
                            } elseif ($level == "25") {
                            ?>

                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>

                            <?php
                            } elseif ($level == "20") {
                            ?>
                                <div class="skills__item active"><img src="<?= $stars; ?>" alt="" style="width: 100%; height: 100%;"></div>

                            <?php
                            } else {
                            };
                            ?>

                        </div>
                        </li>
                        <br>
                    <?php
                }
                    ?>


                    </div>

            </div>







            <div class="section">

                <div class="section--title">
                    <h2>
                        Pencapaian
                    </h2>
                </div>

                <div class="section--content section--content-single-textarea">
                    <p><?= $availability_description; ?></p>
                </div>
            </div>




























    </section>




</body>

</html>