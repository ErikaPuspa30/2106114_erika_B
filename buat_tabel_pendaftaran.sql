CREATE TABLE peserta_seni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    jenis_seni VARCHAR(50) NOT NULL,
    pengalaman TEXT,
    waktu_pendaftaran TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
