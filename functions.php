<?php

$conn = mysqli_connect("localhost", "root", "", "travel1");


function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows[]=$row;
    }
    return $rows;
};

// Cek login & role. Dipanggil di awal setiap halaman yang butuh login.
function check_roles($allowed_roles) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Pastikan user sudah login dan memiliki role
    if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $allowed_roles)) {
        header('Location: login.php'); // Redirect jika tidak memiliki akses
        exit;
    }
}

// Escape output HTML
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function create ($data){
    global $conn;
    //query insert data (prepared statement, aman dari SQL injection)
    $stmt = mysqli_prepare($conn, "INSERT INTO datapengunjung (nama, jml, cekin, no) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $data["nama"], $data["jml"], $data["cekin"], $data["no"]);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_affected_rows($stmt);
}

function hapus ($id){
    global $conn;
    $id = (int) $id;
    $stmt = mysqli_prepare($conn, "DELETE FROM datapengunjung WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_affected_rows($stmt);
}

function update($data){
    global $conn;
    $id = (int) $data["id"];

    //query update data (destinasi & tanggal keberangkatan)
    $stmt = mysqli_prepare($conn, "UPDATE datapengunjung SET jml = ?, cekin = ? WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "ssi", $data["jml"], $data["cekin"], $id);
    return mysqli_stmt_execute($stmt);
}

function temukan($search){
    global $conn;
    $keyword = "%" . $search . "%";
    $stmt = mysqli_prepare($conn, "SELECT * FROM datapengunjung WHERE nama LIKE ? ORDER BY id DESC");
    mysqli_stmt_bind_param($stmt, "s", $keyword);
    mysqli_stmt_execute($stmt);
    return mysqli_fetch_all(mysqli_stmt_get_result($stmt), MYSQLI_ASSOC);
}

function authenticate_user($username, $password) {
    global $conn;

    // Query untuk mendapatkan password dan role
    $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $hashed_password, $role);
    $found = $stmt->fetch();
    $stmt->close();

    if (!$found) {
        return false;
    }

    if (password_verify($password, $hashed_password)) {
        return ['username' => $username, 'role' => $role];
    }

    // Akun lama yang password-nya masih tersimpan polos: verifikasi sekali, lalu ganti dengan hash
    if (hash_equals($hashed_password, $password)) {
        $new_hash = password_hash($password, PASSWORD_DEFAULT);
        $upd = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $upd->bind_param("si", $new_hash, $id);
        $upd->execute();
        return ['username' => $username, 'role' => $role];
    }

    return false;
}

function register_user($username, $password) {
    global $conn;

    // Periksa apakah username sudah ada
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        return -1; // Username sudah digunakan
    }

    // Masukkan pengguna baru, password disimpan sebagai hash
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, 'visitor')");
    $stmt->bind_param("ss", $username, $password_hash);

    $stmt->execute();
    return $stmt->affected_rows;
}



?>