<br>
<a href="?page=tambah" type="button" class="btn btn-primary <?= isset($_GET['page']) ? $_GET['page'] == 'tambah' ? 'active' : '' : '' ?>">Tambah Data User</a><br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Level</th>
            <th scope="col">Status</th>
            <th scope="col">Last Login</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM users inner join profil on users.id_user=profil.id_user";
        $query = mysqli_query($konek, $sql);
        // $data = mysqli_fetch_assoc($query); //ada 3 row,assoc,array
        //array adalah pasangan key dan value
        // var_dump($data['email']);
        // var_dump($data);
        // die;

        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <th><?= $no++ ?></th>
                <td><?= $data['username'] ?></td>
                <td><?= $data['nama_depan'] . ' ' . $data['nama_belakang'] ?></td>
                <td><?= $data['jk'] ?></td>
                <td><?= $data['level'] ?></td>
                <td><?= $data['status'] ?></td>
                <td><?= $data['login_at'] ?></td>
                <td>
                    <a href="?page=update" class="btn btn-sm btn-info <?= isset($_GET['page']) ? $_GET['page'] == 'update' ? 'active' : '' : '' ?>">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php endwhile ?>

    </tbody>
</table>