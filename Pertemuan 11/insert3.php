<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Gunakan formulir untuk mengirim data.');
}

$firstname = trim((string) ($_POST['firstname'] ?? ''));
$lastname = trim((string) ($_POST['lastname'] ?? ''));
$age = filter_var($_POST['age'] ?? null, FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 0],
]);

if ($firstname === '' || $lastname === '' || strlen($firstname) > 15 || strlen($lastname) > 15 || $age === false) {
    http_response_code(422);
    exit('Data tidak valid. Nama wajib diisi (maksimum 15 byte) dan usia harus bilangan bulat tidak negatif.');
}

try {
    require __DIR__ . '/db.php';
    $stmt = $pdo->prepare('INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES (?, ?, ?)');
    $stmt->execute([$firstname, $lastname, $age]);
    echo '1 record added';
} catch (PDOException $e) {
    http_response_code(500);
    echo 'Gagal menyimpan data.';
}
