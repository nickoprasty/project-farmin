<?php 
include 'database.php';

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
header('Content-Type: application/json');

$sql = "
    SELECT p.nama_pupuk, SUM(t.jumlah) as jumlah 
    FROM transaksi_pupuk t
    JOIN pupuk p ON t.id_pupuk = p.id_pupuk
    GROUP BY p.nama_pupuk
";

$res = $db->query($sql);
$data = [];

if (!$res) {
    echo json_encode(["error" => $db->error]);
    exit;
}

while($row = $res->fetch_assoc()){
    $data[] = $row;
}

echo json_encode($data);
?>
