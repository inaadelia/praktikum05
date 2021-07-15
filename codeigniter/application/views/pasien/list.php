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
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor =1;
                            foreach($pasien->result() as $pasien){
                                echo'
                                <tr>
                                <td>'.$nomor.'</td>
                                <td>'.$pasien->kode.'</td>
                                <td>'.$pasien->nama.'</td>
                                <td>'.$pasien->gender.'</td>
                                <td>'.$pasien->tmp_lahir.'</td>
                                <td>'.$pasien->tgl_lahir.'</td>
                                <td>'.$pasien->email.'</td>
                                <td><a href="'.base_url().'index.php/pasien/view/'
                                .$pasien->id.'">view</a></td>
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