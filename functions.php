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

function create ($data){
    global $conn;
        //ambil data dari tiap elemen yang ada di form
        $nama=htmlspecialchars($data["nama"]);
        $jml=htmlspecialchars($data["jml"]);
        $cekin=htmlspecialchars($data["cekin"]);
        $no=htmlspecialchars($data["no"]);
    
        //query insert data
        $query = "INSERT INTO datapengunjung
                    VALUES ('','$nama','$jml','$cekin','$no','','')";
    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    
}

function hapus ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM datapengunjung WHERE id = $id");
    mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    //ambil data dari tiap elemen yang ada di form
    $id=$data["id"];
    $cekin=htmlspecialchars($data["cekin"]);
    
    //query update data
    $query = "UPDATE datapengunjung SET
            cekin = '$cekin'
            WHERE id=$id
            ";
    
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function temukan($search){
    $query = "SELECT * FROM datapengunjung WHERE
    nama LIKE '%$search%'
    ";
    return query($query);
}

function authenticate_user($username, $password) {
    $conn = new mysqli('localhost', 'root', '', 'travel1');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mendapatkan password dan role
    $stmt = $conn->prepare("SELECT password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password, $role);
    $stmt->fetch();

    // Verifikasi password (gunakan strcmp jika password tidak terenkripsi)
    if ($hashed_password && $password === $hashed_password) {
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

    // Masukkan pengguna baru
    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, 'visitor')");
    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();
    return $stmt->affected_rows;
}



?>