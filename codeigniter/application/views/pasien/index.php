<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pasien</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th><th>Kode</th><th>Nama</th><th>Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor=1;
                            foreach($list_pasien as $pasien){
                                ?>
                                <tr>
                                    <td><?=$nomor?></td>
                                    <td><?=$pasien->kode?></td>
                                    <td><?=$pasien->nama?></td>
                                    <td><?=$pasien->gender?></td>
                                </tr>
                                <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>