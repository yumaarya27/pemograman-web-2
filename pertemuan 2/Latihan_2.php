<?php
// inisiasi variabel yang digunakan
// nama peralatan
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// harga per unit peralatan
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// jumlah peralatan yang ada
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

// total harga per jenis peralatan
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

// hitung grand total nilai peralatan
$tharga = $th1 + $th2 + $th3 + $th4;

// besar diskon (%)
$diskon = 5;

// jumlah total diskon yang diberikan
$tdiskon = ($diskon * $tharga) / 100;

// jumlah yang harus dibayar
$tdibayar = $tharga - $tdiskon;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peralatan Yang Dibeli</title>
    <style>
        body {
            font-size: 14pt;
            font-family: Arial, sans-serif;
        }
        table {
            font-size: 12pt;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #000;
            padding: 6px 10px;
        }
        .title {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 18pt;
            color: blue;
        }
    </style>
</head>
<body>
<center>
    <div class="title">Contoh Perhitungan dengan PHP</div>
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td colspan="4" align="center" valign="middle">
                <b>Daftar Pemesanan Peralatan Kantor</b>
            </td>
        </tr>
        <tr>
            <td><b>Nama Peralatan</b></td>
            <td><b>Jumlah</b></td>
            <td><b>Harga Satuan</b></td>
            <td><b>Jumlah Harga</b></td>
        </tr>

        <?php
        // Baris 1
        echo "<tr>";
        echo "<td align="left">$brg1</td>";
        echo "<td align="right">$jmlbrg1</td>";
        echo "<td align="right">$harga1</td>";
        echo "<td align="right">$th1</td>";
        echo "</tr>";

        // Baris 2
        echo "<tr>";
        echo "<td align="left">$brg2</td>";
        echo "<td align="right">$jmlbrg2</td>";
        echo "<td align="right">$harga2</td>";
        echo "<td align="right">$th2</td>";
        echo "</tr>";

        // Baris 3
        echo "<tr>";
        echo "<td align="left">$brg3</td>";
        echo "<td align="right">$jmlbrg3</td>";
        echo "<td align="right">$harga3</td>";
        echo "<td align="right">$th3</td>";
        echo "</tr>";

        // Baris 4
        echo "<tr>";
        echo "<td align="left">$brg4</td>";
        echo "<td align="right">$jmlbrg4</td>";
        echo "<td align="right">$harga4</td>";
        echo "<td align="right">$th4</td>";
        echo "</tr>";
        ?>

        <tr>
            <td colspan="3" align="right">Total Harga</td>
            <td align="right"><?php echo $tharga; ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                Diskon ( <?php echo $diskon; ?> % )
            </td>
            <td align="right"><?php echo $tdiskon; ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right">Jumlah harus dibayar</td>
            <td align="right"><?php echo $tdibayar; ?></td>
        </tr>
    </table>
</center>
</body>
</html>
