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
    <div class="container" id="data">
        <H1 class="my-2"> Data Kependudukan</H1>
        <hr class="dropdown-divider">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="100px">No.KTP.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal lahir</th>
                    <th scope="col">Desa</th>
                    <th scope="col">kota/kabupaten</th>
                    <th scope="col">provinsi</th>
                    <th scope="col">status pernikahan</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($penduduk as $k) : ?>
                    <tr>
                        <td><?= $k['noktp']; ?></td>
                        <td><?= $k['nama']; ?></td>
                        <td><?= $k['tgl_lahir']; ?></td>
                        <td><?= $k['desa']; ?></td>
                        <td><?= $k['kota']; ?></td>
                        <td><?= $k['provinsi']; ?></td>
                        <td><?= $k['status']; ?></td>
                        <td>
                            <a href="/penduduk/acthapus/<?= $k['noktp']; ?>" class=" btn btn-danger" onclick="return confirm('Apakah Anda Yakin')">Hapus</a>
                            <a href="/penduduk/edit/<?= $k['noktp']; ?>" class=" btn btn-success">Edit</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href=" /penduduk/tambah" class=" btn btn-primary"> Tambah</a>
        <a href="/penduduk/print" target="_BLANK" class=" btn btn-success">Print</a>



    </div>
</body>

</html>
<script>
    function printDiv() {
        var divContents = document.getElementById("data").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html>');
        a.document.write('<body > <h1>Data Penduduk<br>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>