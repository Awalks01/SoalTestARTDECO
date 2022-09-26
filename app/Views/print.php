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
        <H1> Data Kependudukan</H1>
    </div>
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
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>