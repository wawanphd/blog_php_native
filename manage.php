<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <b>Welcome to My Blog</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">Manage Artikel</h5>
             <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Kategori</th>
                        <th>action</th>
                    </tr>
                </thead>
                <?php
                    include "koneksi.php";
                    $data = $conn->query("select * from tbl_blog");
                ?>
                <tbody>
                    <?php
                        $no =1;
                        while($row=$data->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $row['judul']; ?></td>
                        <td><?php echo $row['isi']; ?></td>
                        <td><?php echo $row['kategori']; ?></td>
                        <td>

                    <a href="hapus.php?id_hapus=<?php echo $row['id'] ?>">hapus</a> 



                        | edit</td>
                    </tr>
                    <?php 
                        $no++;
                        }
                    ?>

                </tbody>
             </table>   
        </div>
    </div>
</div>








