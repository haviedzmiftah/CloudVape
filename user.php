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
                    <div class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahUser"> tambah User</div>
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
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal View -->
            <div class="modal fade" id="modalView" tabindex="-1" aria-labelledby="modalView" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (empty($result)) {
                echo "Data user tidak ada";
            }else {
            ?>    
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">User Name</th>
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
                            <td><?php echo $row['nama']?></td>
                            <td><?php echo $row['username']?></td>
                            <td><?php echo $row['level']?></td>
                            <td><?php echo $row['nohp']?></td>
                            <td class="d-flex">
                                <button class="btn btn-info me-1" data-bs-toggle="modal" data-bs-target="#modalView"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-warning me-1"><i class="bi bi-pencil-square"></i></i></button>
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