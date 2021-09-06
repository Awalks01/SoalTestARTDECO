<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/appstyle.css">
    <title>EasyCVMaker</title>
</head>

<body>
    <!--navbar-->
    <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span>
                        <img src="/img/Logo-white.png" alt="" width="120" height="34">
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Buat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGK33CZ" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <form action="/app/create2" method="POST">
        <div id="app">
            <div class="container fade fade-entered">
                <div class="main center">
                    <div class="wizard">
                        <div class="page__header">
                            <header class="center">
                                <h1>Pengalaman Pribadi</h1>
                            </header>
                        </div>
                        <div class="wizard__inner">
                            <div class="form__history">
                                <div class="form-sections">
                                    <div style="position: relative;">
                                        <div class="form-section form-section--profile" style="overflow: hidden;">
                                            <div class="form-section__header">
                                                <div class="form-section__header-text">
                                                    <div class="form-section__header-counter fade fade-">
                                                        <div class="form-section__header-counter-text">1</div>
                                                    </div>
                                                    <div class="form-section__header-icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path>
                                                        </svg></div>Profil
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-section__fieldset">
                                                    <div class="form-section__fieldset">
                                                        <div class="form__row">
                                                            <hr style="margin-top: 0px; margin-bottom: 20px;">
                                                            <div class="form__fields">
                                                                <div class="form__field-group">
                                                                    <div class="form-element col-1"><label class="">Deskripsi</label>
                                                                        <div class="quill ">

                                                                        </div>
                                                                        <textarea id="profile_editor" name="profile_description"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__fields-group form__fields-group--buttons"><button class="button--white button--tips-section-item">
                                                                    <div class="icon--visible"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg--LightbulbOutline" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6C7.8 12.16 7 10.63 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z"></path>
                                                                        </svg></div>Tips

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-section form-section--work" style="overflow: hidden;">
                                            <div class="form-section__header">
                                                <div class="form-section__header-text">
                                                    <div class="form-section__header-counter fade fade-">
                                                        <div class="form-section__header-counter-text">1</div>
                                                    </div>
                                                    <div class="form-section__header-icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 16v-1H3.01L3 19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-4h-7v1h-4zm10-9h-4.01V5l-2-2h-4l-2 2v2H4c-1.1 0-2 .9-2 2v3c0 1.11.89 2 2 2h6v-2h4v2h6c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-6 0h-4V5h4v2z"></path>
                                                        </svg></div>Pengalaman kerja
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-section__fieldset">
                                                    <div>
                                                        <div class="form-section__rows">
                                                            <div class="form__row">
                                                                <div class="form__card form__card--filled form__card--hidden">
                                                                    <div class="form__card-data">
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form__fields" style="display: block;">
                                                                        <div class="form__fields-group">
                                                                            <div class="form-element col-2" name="position-work.items[0].function"><label for="items[0].function" class="">Posisi Kerja</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="work_items[0]_function" col="col-2" type="text" maxlength="100" placeholder="Manajer Penjualan" label="Posisi Kerja" autocomplete="off" class="" value="">
                                                                                    <div class="form__element-counter fade fade-exited">100</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-element col-2" name="position-work.items[0].city"><label for="items[0].city" class="">Kota</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="work_items[0]_city" col="col-2" type="text" maxlength="100" placeholder="Jakarta" label="Kota" autocomplete="off" class="">
                                                                                    <div class="form__element-counter fade fade-exited">100</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form__fields-group">
                                                                            <div class="form-element col-1" name="position-work.items[0].employer"><label for="items[0].employer" class="">Pemberi Pekerjaan/Perusahaan</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="work_items[0]_employer" col="col-1" type="text" maxlength="100" placeholder="PwC" label="Pemberi Pekerjaan/Perusahaan" autocomplete="off" class="">
                                                                                    <div class="form__element-counter fade fade-exited">100</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form__fields-group col-2">
                                                                            <div class="form-element col-2" name="position-work.items[0].startMonth"><label class="">Tanggal Mulai</label>
                                                                                <select class="form-select-custom" name="work_items[0]_startMonth">
                                                                                    <option value="0">Jangan tampilkan</option>
                                                                                    <option value="tersembunyi">Hanya tampilkan tahun</option>
                                                                                    <option value="1">Januari</option>
                                                                                    <option value="2">Februari</option>
                                                                                    <option value="3">Maret</option>
                                                                                    <option value="4">April</option>
                                                                                    <option value="5">Mei</option>
                                                                                    <option value="6">Juni</option>
                                                                                    <option value="7">Juli</option>
                                                                                    <option value="8">Agustus</option>
                                                                                    <option value="9">September</option>
                                                                                    <option value="10">Oktober</option>
                                                                                    <option value="11">November</option>
                                                                                    <option value="12">Desember</option>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                            <div class="form-element col-2" name="position-work.items[0].startYear"><label class="">&nbsp;</label>
                                                                                <select class="form-select-custom form__select-element" name="work_items[0]_startYear">
                                                                                    <?php
                                                                                    for ($x = 2030; $x >= 1970; $x -= 1) {
                                                                                        echo "<option value=" . $x . ">" . $x . "</option>";
                                                                                    }
                                                                                    ?>

                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form__fields-group col-2">
                                                                            <div class="form-element col-2" name="position-work.items[0].endMonth"><label class="">Tanggal Selesai</label>
                                                                                <select class="form-select-custom" name="work_items[0]_endMonth">
                                                                                    <option value="saat ini">Saat ini</option>
                                                                                    <option value="0">Jangan tampilkan</option>
                                                                                    <option value="tersembunyi">Hanya tampilkan tahun</option>
                                                                                    <option value="1">Januari</option>
                                                                                    <option value="2">Februari</option>
                                                                                    <option value="3">Maret</option>
                                                                                    <option value="4">April</option>
                                                                                    <option value="5">Mei</option>
                                                                                    <option value="6">Juni</option>
                                                                                    <option value="7">Juli</option>
                                                                                    <option value="8">Agustus</option>
                                                                                    <option value="9">September</option>
                                                                                    <option value="10">Oktober</option>
                                                                                    <option value="11">November</option>
                                                                                    <option value="12">Desember</option>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                            <div class="form-element col-2" name="position-work.items[0].endYear"><label class="">&nbsp;</label>
                                                                                <select class="form-select-custom form__select-element" name="work_items[0]_endYear">
                                                                                    <?php
                                                                                    for ($x = 2030; $x >= 1970; $x -= 1) {
                                                                                        echo "<option value=" . $x . ">" . $x . "</option>";
                                                                                    }
                                                                                    ?>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="button--grey button--add-section-item">
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-add-circle-outline" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                                            </svg> Tambahkan pengalaman kerja lain</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-section form-section--education" style="overflow: hidden;">
                                            <div class="form-section__header">
                                                <div class="form-section__header-text">
                                                    <div class="form-section__header-counter fade fade-">
                                                        <div class="form-section__header-counter-text">1</div>
                                                    </div>
                                                    <div class="form-section__header-icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"></path>
                                                        </svg></div>Pendidikan dan Kualifikasi
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-section__fieldset">
                                                    <div>
                                                        <div class="form-section__rows">
                                                            <div class="form__row">
                                                                <div class="form__card form__card--filled form__card--hidden">
                                                                    <div class="form__card-data">
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form__fields" style="display: block;">
                                                                        <div class="form__fields-group">
                                                                            <div class="form-element col-2" name="position-education.items[0].name"><label for="items[0].name" class="">Gelar</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="education_items[0]_name" col="col-2" type="text" placeholder="mis. Sarjana Sains" label="Gelar" autocomplete="off" maxlength="100" class="" value="">
                                                                                    <div class="form__element-counter fade fade-exited">100</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-element col-2" name="position-education.items[0].city"><label for="items[0].city" class="">Kota</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="education_items[0]_city" col="col-2" type="text" placeholder="mis. Jakarta" label="Kota" autocomplete="off" maxlength="100" class="" value="">
                                                                                    <div class="form__element-counter fade fade-exited">100</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form__fields-group">
                                                                            <div class="form-element col-1" name="position-education.items[0].institution"><label for="items[0].institution" class="">Sekolah</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="education_items[0]_institution" col="col-1" type="text" placeholder="mis. Universitas Indonesia" label="Sekolah" autocomplete="off" maxlength="100" class="" value="">
                                                                                    <div class="form__element-counter fade fade-exited">100</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form__fields-group col-2">
                                                                            <div class="form-element col-2" name="position-education.items[0].startMonth"><label class="">Tanggal Mulai</label>
                                                                                <select class="form-select-custom" name="education_items[0]_startMonth">
                                                                                    <option value="0">Jangan tampilkan</option>
                                                                                    <option value="tersembunyi">Hanya tampilkan tahun</option>
                                                                                    <option value="1">Januari</option>
                                                                                    <option value="2">Februari</option>
                                                                                    <option value="3">Maret</option>
                                                                                    <option value="4">April</option>
                                                                                    <option value="5">Mei</option>
                                                                                    <option value="6">Juni</option>
                                                                                    <option value="7">Juli</option>
                                                                                    <option value="8">Agustus</option>
                                                                                    <option value="9">September</option>
                                                                                    <option value="10">Oktober</option>
                                                                                    <option value="11">November</option>
                                                                                    <option value="12">Desember</option>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                            <div class="form-element col-2" name="position-education.items[0].startYear"><label class="">&nbsp;</label>
                                                                                <select class="form-select-custom form__select-element form__field-invisible" name="education_items[0]_startYear">
                                                                                    <?php
                                                                                    for ($x = 2030; $x >= 1970; $x -= 1) {
                                                                                        echo "<option value=" . $x . ">" . $x . "</option>";
                                                                                    }
                                                                                    ?>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form__fields-group col-2">
                                                                            <div class="form-element col-2" name="position-education.items[0].endMonth"><label class="">Tanggal Selesai</label>
                                                                                <select class="form-select-custom" name="education_items[0]_endMonth">
                                                                                    <option value="saat ini">Saat ini</option>
                                                                                    <option value="0">Jangan tampilkan</option>
                                                                                    <option value="tersembunyi">Hanya tampilkan tahun</option>
                                                                                    <option value="1">Januari</option>
                                                                                    <option value="2">Februari</option>
                                                                                    <option value="3">Maret</option>
                                                                                    <option value="4">April</option>
                                                                                    <option value="5">Mei</option>
                                                                                    <option value="6">Juni</option>
                                                                                    <option value="7">Juli</option>
                                                                                    <option value="8">Agustus</option>
                                                                                    <option value="9">September</option>
                                                                                    <option value="10">Oktober</option>
                                                                                    <option value="11">November</option>
                                                                                    <option value="12">Desember</option>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                            <div class="form-element col-2" name="position-education.items[0].endYear"><label class="">&nbsp;</label>
                                                                                <select class="form-select-custom form__select-element" name="education_items[0]_endYear">
                                                                                    <?php
                                                                                    for ($x = 2030; $x >= 1970; $x -= 1) {
                                                                                        echo "<option value=" . $x . ">" . $x . "</option>";
                                                                                    }
                                                                                    ?>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><button class="button--grey button--add-section-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-add-circle-outline" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                                            </svg> Tambahkan pendidikan lain</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-section form-section--hobby" style="overflow: hidden;">
                                            <div class="form-section__header">
                                                <div class="form-section__header-text">
                                                    <div class="form-section__header-counter fade fade-">
                                                        <div class="form-section__header-counter-text">1</div>
                                                    </div>
                                                    <div class="form-section__header-icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path>
                                                        </svg></div>Minat
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-section__fieldset">
                                                    <div>
                                                        <div class="form-section__rows">
                                                            <div class="form__row">
                                                                <div class="form__card form__card--filled form__card--hidden">
                                                                    <div class="form__card-data">
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form__fields" style="display: block;">
                                                                        <div class="form__fields-group">
                                                                            <div class="form-element col-1" name="position-hobby.items[0].name"><label for="items[0].name" class="">Hobi</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="hobby_items[0]_name" col="col-1" type="text" label="Hobi" maxlength="100" autocomplete="off" placeholder="mis. mendaki" class="" value="">
                                                                                    <div class="form__element-counter fade fade-exited">100</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><button class="button--grey button--add-section-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-add-circle-outline" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                                            </svg> Tambahkan hobi lain</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-section form-section--skill" style="overflow: hidden;">
                                            <div class="form-section__header">
                                                <div class="form-section__header-text">
                                                    <div class="form-section__header-icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13 1.07V9h7c0-4.08-3.05-7.44-7-7.93zM4 15c0 4.42 3.58 8 8 8s8-3.58 8-8v-4H4v4zm7-13.93C7.05 1.56 4 4.92 4 9h7V1.07z"></path>
                                                        </svg></div>Keahlian
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-section__fieldset">
                                                    <div>
                                                        <div class="form-section__rows">
                                                            <div class="form__row">
                                                                <div class="form__card form__card--empty form__card--hidden">
                                                                    <div class="form__card-data">
                                                                        <div class="form__card-name"><b>Keahlian</b></div>
                                                                        <div class="form__card-date">Pilih level</div>
                                                                    </div>
                                                                    <div class="form__card-tools">
                                                                        <div class="form__card-disabled"></div>
                                                                        <div class="form__card-tool">
                                                                            <div class="form__card-delete"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-close" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="form__card-tool">
                                                                            <div class="form__card-expand"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-edit" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="form__card-tool">
                                                                            <div class="form__card-handle"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-menu" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="form__fields" style="display: block;">
                                                                        <div class="form__fields-group">
                                                                            <div class="form-element col-2" name="position-skill.items[0].name"><label for="items[0].name" class="">Keahlian</label>
                                                                                <div style="position: relative;">
                                                                                    <input name="skill_items[0]_name" col="col-2" type="text" label="Keahlian" maxlength="50" placeholder="mis. Microsoft Word" class="" value="">
                                                                                    <div class="form__element-counter fade fade-exited">50</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-element col-2" name="position-skill.items[0].level"><label for="items[0].level" class="">Level</label>
                                                                                <select class="form-select-custom" name="skill_items[0]_level">
                                                                                    <option value="0">Pilih level</option>
                                                                                    <option value="100">Ahli</option>
                                                                                    <option value="75">Berpengalaman</option>
                                                                                    <option value="50">Terampil</option>
                                                                                    <option value="25">Menengah</option>
                                                                                    <option value="20">Pemula</option>
                                                                                </select><i class="form-select-custom--arrow"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><button class="button--grey button--add-section-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-add-circle-outline" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                                            </svg> Tambahkan keahlian lain</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-section form-section--availability" style="overflow: hidden;">
                                            <div class="form-section__header">
                                                <div class="form-section__header-text">
                                                    <div class="form-section__header-counter fade fade-">
                                                        <div class="form-section__header-counter-text">1</div>
                                                    </div>
                                                    <div class="form-section__header-icon"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                                                        </svg></div>Pencapaian
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-section__fieldset">
                                                    <div class="form-section__fieldset">
                                                        <div class="form__row">
                                                            <div class="form__card form__card--filled form__card--hidden">
                                                                <div class="form__card-data">
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            <div class="form__fields">
                                                                <div class="form__field-group">
                                                                    <div class="form-element col-1"><label class="">Deskripsi</label>
                                                                        <div class="quill ">
                                                                        </div><textarea id="availability_editor" name="availability_description"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__buttons">
                                    <div class="form__button"><button class="btn__large button--red" type="submit">
                                            <div class="spinner--hidden"></div>Langkah selanjutnya<div class="btn__arrow-right"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-keyboard-arrow-right" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                </svg></div>
                                        </button></div>
                                    <div class="form__button"><button class="btn__large button--lightgrey button--link" type="submit">
                                            <div class="btn__arrow-left"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="svg-keyboard-arrow-left" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path>
                                                </svg></div>Langkah sebelumnya
                                        </button></div>
                                    <div class="form__button form__button--hidden"><button type="submit">AutoSaver</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="heading__bg"></div>
            <div class="modals"></div>
        </div>
    </form>

    <!-- footer -->
    <footer class="page-footer-container" style="background-color : #f71735;">
        <div class="page-footer -secondary">
            <div class="container">
                <div style="float:right;">
                    2021 © EasyCVmaker | Bujang-Developer | Team-Lord </div>
                <div style="float:right;margin-top:-40px; margin-right:30px;"></div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>