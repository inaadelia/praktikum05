<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data BMI</h1>
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
                                <th>Tanggal</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>BMI</th>
                                <th>Status BMI</th>
                                <th>Catatan</th>
                                <th>Pasien</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor =1;
                            foreach($bmi->result() as $bmi){
                                echo'
                                <tr>
                                <td>'.$nomor.'</td>
                                <td>'.$bmi->tanggal.'</td>
                                <td>'.$bmi->berat.'</td>
                                <td>'.$bmi->tinggi.'</td>
                                <td>'.$bmi->bmi.'</td>
                                <td>'.$bmi->status_bmi.'</td>
                                <td>'.$bmi->catatan.'</td>
                                <td>'.$bmi->nama.'</td>
                                <td><a href="'.base_url().'index.php/bmi/view/'.$bmi->id.'">view</a></td>
                                </tr>';
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>