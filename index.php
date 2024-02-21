<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <div class="container-fluid d-flex justify-content-start mt-5 ">
    <div class="card  col-12">
        <div class="card-header">
        <h4>Data Customer</h4>
        </div>
        <div class="mt-4 mb-4">
        <a  href="tambah.php"> <button class="btn btn-sm btn-primary">Tambah Customer</button></a>
        </div> <div class="card-body">
        <table id="example" class="table table-hover">
        <thead>
        <tr>
        <th>ID</th>
        <th>Nama Customer</th>
        <th>No handphone</th>
        <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once 'koneksi.php';
        $q = "SELECT * FROM tb_customer";
        $result = mysqli_query($koneksi, $q);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <!-- jangan lupa ini  -->
        <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['no_hp'] ?></td>
        <td><?= $row['alamat'] ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>new DataTable('#example');</script>

</body>
</html>