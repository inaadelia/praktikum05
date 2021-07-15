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
                                <th>#</th>
                                <th>Tanggal Periksa</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>BMI</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor=1;
                            foreach($list_bmipasien as $bmipasien){
                                $statusBMI  = $bmi_model->statusBMI($bmipasien->bmi);
                                $tempPasien = 'pasien'.$nomor;
                                $tempBmi    = 'bmi'.$nomor;
                                ?>
                                <tr>
                                    <td><?=$nomor?></td>
                                    <td><?= $bmipasien->tanggal?></td>
                                    <td><?= $$tempPasien->kode ?></td>
                                    <td><?= $bmipasien->pasien?></td>
                                    <td><?= $$tempPasien->gender ?></td>
                                    <td><?= $$tempBmi->berat ?></td>
                                    <td><?= $$tempBmi->tinggi ?></td>
                                    <td><?= $bmipasien->bmi?></td>
                                    <td><?= $$tempBmi->statusBMI($$tempBmi->berat,$$tempBmi->tinggi) ?></td>
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