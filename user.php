<?php
include "proses/connect.php";
$query = mysqli_query($con, "SELECT * FROM user");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-3">
    <div class="card">
        <div class="card-header"> User</div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <div class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahUser">Tambah User</div>
                </div>
            </div>
            <!-- Modal Tambah User-->
            <div class="modal fade" id="tambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="floatingInput" name="nama" placeholder="Nama" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                nama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" name="username" placeholder="Username" required>
                                            <label for="floatingInput">Email</label>
                                            <div class="invalid-feedback">
                                                isi email dengan benar
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="level">
                                                <option selected hidden value="3">Pilih Level</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Kasir</option>
                                                <option value="3">Pelayan</option>
                                                <option value="4">Dapur</option>
                                            </select>
                                            <label for="floatingInput">Level User</label>
                                            <div class="invalid-feedback">
                                                level
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Nomor Hp" name="nohp">
                                            <label for="floatingInput">No Hp</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingInput" placeholder="Pass" disabled value="123456" name="password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="" style="height: 100px;" name="alamat"></textarea>
                                    <label for="floatingInput">Alamat</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" name="input_user" value="1">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal View -->
            <?php foreach ($result as $row) { ?>
                <div class="modal fade" id="modalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="modalView" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled class="form-control" id="floatingInput" name="nama" placeholder="Nama" value="<?php echo $row['nama'] ?>">
                                                <label for="floatingInput">Nama</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="email" class="form-control" id="floatingInput" name="username" placeholder="Username" value="<?php echo $row['username'] ?>">
                                                <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select disabled class="form-select" aria-label="default select example" name="level" id="" required>
                                                    <?php
                                                    $data = array("Admin", "Kasir", "Pelayan", "Dapur");
                                                    foreach ($data as $key => $value) {
                                                        if ($row['level'] == $key + 1) {
                                                            echo "<option selected value='$key'>$value </option>";
                                                        } else {
                                                            echo "<option value='$key'>$value </option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingInput">Level User</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input disabled type="number" class="form-control" id="floatingInput" placeholder="Nomor Hp" name="nohp" value="<?php echo $row['nohp'] ?>">
                                                <label for="floatingInput">No Hp</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating">
                                        <textarea disabled class="form-control" id="" style="height: 100px;" name="alamat"><?php echo $row['alamat'] ?></textarea>
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="modalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="modalView" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_edit_user.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="floatingInput" name="nama" placeholder="Nama" value="<?php echo $row['nama'] ?>">
                                                <label for="floatingInput">Nama</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" name="username" placeholder="Username" value="<?php echo $row['username'] ?>">
                                                <label for="floatingInput">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" aria-label="default select example" name="level" id="" required>
                                                    <?php
                                                    $data = array("Admin", "Kasir", "Pelayan", "Dapur");
                                                    foreach ($data as $key => $value) {
                                                        if ($row['level'] == $key + 1) {
                                                            echo "<option selected value=".($key+1).">$value </option>";
                                                        } else {
                                                            echo "<option value=".($key+1).">$value </option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingInput">Level User</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="Nomor Hp" name="nohp" value="<?php echo $row['nohp'] ?>">
                                                <label for="floatingInput">No Hp</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control" id="" style="height: 100px;" name="alamat"><?php echo $row['alamat'] ?></textarea>
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" name="input_user" value="1">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            if (empty($result)) {
                echo "Data user tidak ada";
            } else {
            ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Level</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php
                                        if ($row['level'] == 1) {
                                            echo "admin";
                                        } elseif ($row['level'] == 2) {
                                            echo "Kasir";
                                        } elseif ($row['level'] == 3) {
                                            echo "Pelayan";
                                        } elseif ($row['level'] == 4) {
                                            echo "Dapur";
                                        }
                                        ?></td>
                                    <td><?php echo $row['nohp'] ?></td>
                                    <td class="d-flex">
                                        <button class="btn btn-info me-1" data-bs-toggle="modal" data-bs-target="#modalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-warning me-1" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></i></button>
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>