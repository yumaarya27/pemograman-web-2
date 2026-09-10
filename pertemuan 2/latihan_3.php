<!DOCTYPE html>
<html>
<head>
    <title>Latihan Operator Aritmatika</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            margin-top: 30px;
        }

        th {
            padding: 10px 35px;
            color: maroon;
        }

        td {
            padding: 5px;
        }

        input,
        select,
        button {
            height: 22px;
        }
    </style>
</head>

<body>

<form method="post">
    <table>
        <tr>
            <th>Nilai I</th>
            <th>Nilai II</th>
        </tr>

        <tr>
            <td>
                <input type="number" name="nilai1" required>
            </td>

            <td>
                <select name="operator" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </td>

            <td>
                <input type="number" name="nilai2" required>
            </td>

            <td>
                <button type="submit" name="submit">submit</button>
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['submit'])) {
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $hasil = $nilai1 + $nilai2;
            break;

        case '-':
            $hasil = $nilai1 - $nilai2;
            break;

        case '*':
            $hasil = $nilai1 * $nilai2;
            break;

        case '/':
            if ($nilai2 == 0) {
                $hasil = "Tidak bisa dibagi dengan nol";
            } else {
                $hasil = $nilai1 / $nilai2;
            }
            break;

        default:
            $hasil = "Operator tidak tersedia";
    }

    echo "<h3>Hasil: $nilai1 $operator $nilai2 = $hasil</h3>";
}
?>

</body>
</html>
