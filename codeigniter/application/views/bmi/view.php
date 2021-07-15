<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data BMI #ID : <?=$bmi->id?></h1>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td>Tanggal</td><td>:</td><td><?=$bmi->tanggal?></td>
                        </tr>
                        <tr><td>Berat</td><td>:</td><td><?=$bmi->berat?></td></tr>
                        <tr>
                            <td>Tinggi</td><td>:</td><td><?=$bmi->tinggi?></td>
                        </tr>
                        <tr>
                            <td>BMI</td><td>:</td><td><?=$bmi->bmi?></td>
                        </tr>
                        <tr>
                            <td>Tinggi</td><td>:</td><td><?=$bmi->catatan?></td>
                        </tr>
                        <tr>
                            <td>Pasien</td><td>:</td><td><?=$bmi->nama?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>