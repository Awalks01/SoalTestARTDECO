<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>EasyCVMaker</title>
</head>

<body>
    <div class="bg-light text-center py-5 ">
        <H1> Aplikasi Sederhana</H1>
    </div>
    <form action="/penduduk/actupdate/<?= $penduduk['noktp']; ?>" method="POST">
        <div class="container">
            <H1 class="my-2"> Edit Data</H1>
            <hr class="dropdown-divider">
            <div class="mb-3">
                <label class="form-label">No. KTP</label>
                <input type="text" class="form-control" placeholder="NO. KTP" name="noktp" value="<?= $penduduk['noktp']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $penduduk['nama']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?= $penduduk['tgl_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label ">Provinsi</label>
                <select class="form-select col-md-4" name="provinsi">
                    <?php foreach ($provinsi as $k) : ?>
                        <?php if ($penduduk['id_provinsi'] = $k['id_provinsi']) {
                        ?>
                            <option value="<?= $k['id_provinsi']; ?>" selected><?= $k['provinsi']; ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?= $k['id_provinsi']; ?>"><?= $k['provinsi']; ?></option>
                        <?php
                        }
                        ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label ">Kota</label>
                <select class="form-select col-md-4" name="kota">
                    <?php foreach ($kota as $k) : ?>
                        <?php if ($penduduk['id_kota'] = $k['id_kota']) {
                        ?>
                            <option value="<?= $k['id_kota']; ?>" selected><?= $k['kota']; ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?= $k['id_kota']; ?>"><?= $k['kota']; ?></option>
                        <?php
                        }
                        ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label ">Kecamatan</label>
                <select class="form-select col-md-4" name="kecamatan">
                    <?php foreach ($kecamatan as $k) : ?>
                        <?php if ($penduduk['id_kecamatan'] = $k['id_kecamatan']) {
                        ?>
                            <option value="<?= $k['id_kecamatan']; ?>" selected><?= $k['kecamatan']; ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?= $k['id_kecamatan']; ?>"><?= $k['kecamatan']; ?></option>
                        <?php
                        }
                        ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label ">Desa</label>
                <select class="form-select col-md-4" name="desa">
                    <?php foreach ($desa as $k) : ?>
                        <?php if ($penduduk['id_desa'] = $k['id_desa']) {
                        ?>
                            <option value="<?= $k['id_desa']; ?>" selected><?= $k['desa']; ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?= $k['id_desa']; ?>"><?= $k['desa']; ?></option>
                        <?php
                        }
                        ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label ">Status</label>
                <select class="form-select col-md-4" name="status">
                    <option value=" Sudah Menikah">Sudah Menikah</option>
                    <option value=" Lajang">Lajang</option>
                    <option value=" Duda/Janda">Duda/Janda</option>
                </select>
            </div>
            <button type="submit" class=" btn btn-primary">
                Edit
            </button>
            <button type="button" class="btn btn-danger" onClick="javascript:window.location.href='/penduduk'">Batal</button>
    </form>
</body>

</html>