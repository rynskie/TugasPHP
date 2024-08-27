<?php include ('Layout/header.php');
$student = [
    [
        "nama" => "Johny",
        "kelas" => "XI",
        "jurusan" => "HR",
        "umur" => "16",
        "status" => "HADIR",
    ],
    [
        "nama" => "Azmi",
        "kelas" => "X",
        "jurusan" => "HR",
        "umur" => "15",
        "status" => "SAKIT",
    ],
    [
        "nama" => "Almer",
        "kelas" => "X",
        "jurusan" => "HR",
        "umur" => "15",
        "status" => "ALFA",
    ],
];

$number = 1;
?>


<div class="main-content">
    <div class="dashboard-breadrumb m-25">
        <h2>eCommerce Dashboard-filter</h2>
        <div class="input-gruop dashboard-filter">
            <button class="btn btn-success"><i class="fa-solid fa-plus">Tambahkan Siswa</i></button>
        </div>
    </div>
            <div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Dashboard class</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($student as $students) : ?>
                            <tr>
                                <td><?= $number++; ?></td>
                                <?php foreach ($students as $s => $row) : ?>
                                    <td><?= $row ?></td>
                                    <?php endforeach; ?>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pan"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                    </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php include ('Layout/footer.php')?> 