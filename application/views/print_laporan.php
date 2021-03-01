<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Laporan Transaksi (Aulia Husada)</title>
    <style>
        td {
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 4px;
            padding-right: 4px;
        }

        .border td {
            border: 1px solid black;
        }

        .bold {
            font-weight: bold;
        }

        table {
            width: 100%;
        }
    </style>
</head>

<body onload="window.print()">
    <table border="0" style="border: 1px solid black; font-family: Arial;font-size: 9px; padding:4px;" cellspacing="0">
        <tr>
            <td rowspan="2" style="padding: 14px; text-align: center; width:10%"><img style="width: 100px;" src="<?= base_url() ?>assets_admin/img/brand/main_logo.png" alt="" />
            </td>
            <td colspan="3" rowspan="2" style="text-align: center; font-weight: bolder;">
                <h1>AULIA HUSADA</h1>
                <h3 style="margin-bottom: 0px;">LAPORAN KEUNTUNGAN DAN TRANSAKSI</h3>
                <i style="padding-top: 0px;">Jl. Raya Burneh No. ..</i>
            </td>
            <td style="padding-top: 0px; width:10%; vertical-align: text-top;"></td>
        </tr>
        <tr style="text-align: center; font-weight: bolder; font-size: 8px;">
            <td></td>
        </tr>
        <tr>
            <td colspan="5" style="font-weight: bold;">
                <hr />
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3" style="text-align: center;">
                <h2 style="margin-bottom: 0px;"><u>LAPORAN TRANSAKSI</u></h2>
                <i>Tanggal <b><?= date("d-m-Y", strtotime($mulai)) ?></b> sampai <b><?= date("d-m-Y", strtotime($selesai)) ?></b></i>
            </td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">
                <table border="0" cellspacing="0" style="margin-top:20px;">
                    <tr>
                        <td></td>
                        <td style="width: 5%;"></td>
                        <td style="width: 5%;">Total Pasien</td>
                        <td>: <b></b><?= $totalPasien ?> Orang</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 5%;"></td>
                        <td style="width: 5%;">Rincian </td>
                        <td>:</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <table style="margin-top:20px;margin-bottom:20px;" border="1" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th colspan="7">TABEL TRANSAKSI</th>
                                    </tr>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pasien</th>
                                        <th>Waktu</th>
                                        <th>Tindakan</th>
                                        <th>Dokter</th>
                                        <th>Biaya</th>
                                        <th>keuntungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $keuntungan = 0;
                                    $pendapatan = 0;
                                    for ($i = 0; $i < count($dataTransaksi); $i++) {
                                        $pendapatan += ($dataTransaksi[$i]["harga"] + 0);
                                    ?>
                                        <tr>
                                            <td><?= $i + 1 ?></td>
                                            <td><?= $dataTransaksi[$i]["namaPasien"] ?></td>
                                            <td><?= $dataTransaksi[$i]["tanggal"] ?></td>
                                            <td><?= $dataTransaksi[$i]["nama_tindakan"] ?></td>
                                            <td><?= $dataTransaksi[$i]["namaUser"] ?></td>
                                            <td>Rp. <?= number_format($dataTransaksi[$i]["harga"], 0, "", ".") ?></td>
                                            <td>Rp. <?php if ($dataTransaksi[$i]["rule"] != 1) {
                                                        $keuntungan += ($dataTransaksi[$i]["harga"] + 0) * 0.3;
                                                        echo number_format($dataTransaksi[$i]["harga"] * 0.3, 0, "", ".");
                                                    } else {
                                                        $keuntungan += $dataTransaksi[$i]["harga"] + 0;
                                                        echo number_format($dataTransaksi[$i]["harga"], 0, "", ".");
                                                    } ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="5" style="background-color: darkgrey;text-align:center;">Total</td>
                                        <td>Rp. <?= number_format($pendapatan, 0, "", ".") ?></td>
                                        <td>Rp. <?= number_format($keuntungan, 0, "", ".") ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <table style="text-align: center; margin-bottom:50px;">
                    <tr>
                        <td colspan="2">Bangkalan <b><?= date("d-m-Y") ?></b> <br />Mengetahui,</td>
                    </tr>
                    <tr>
                        <td style="width:50%">Pemilik<br /><br /><br /><br /><br /><br />(<b><?= $pemilik ?></b>)</td>
                        <td style="width:50%">Admin<br /><br /><br /><br /><br /><br />(<b><?= $admin ?></b>)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>