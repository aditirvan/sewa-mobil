<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
            <!-- <ul class='d-sm-inline-block'>
                <li><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Transaksi Baru</a></li>
                <li><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Transaksi Baru</a></li>
            </ul> -->


            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a></li>
            </ul>

        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Pemilik</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>CC</th>
                        <th>Warna</th>
                        <th>Nomor Plat</th>
                        <th>Harga Sewa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Pemilik</th>
                        <th>Merk</th>
                        <th>Tipe</th>
                        <th>CC</th>
                        <th>Warna</th>
                        <th>Nomor Plat</th>
                        <th>Harga Sewa</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
                    foreach ($data as $row) : ?>

                        <tr onclick="window.location='<?php echo base_url('mobil/tambah/?id=') ?>'" style='cursor: pointer;'>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>