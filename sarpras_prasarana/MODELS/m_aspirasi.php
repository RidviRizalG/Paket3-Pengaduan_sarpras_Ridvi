<?php
class M_Aspirasi {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    public function getAspirasiByNis($nis) {
        $query = "SELECT i.id_input, i.lokasi, i.ket, i.tgl_pelaporan, 
                         k.ket_kategori, 
                         COALESCE(a.status, 'Menunggu') AS status, 
                         a.feedback 
                  FROM input_aspirasi i
                  JOIN kategori k ON i.id_kategori = k.id_kategori
                  LEFT JOIN aspirasi a ON i.id_input = a.id_input
                  WHERE i.nis = '$nis'
                  ORDER BY i.tgl_pelaporan DESC";
                  
        $result = mysqli_query($this->db, $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getKategori() {
        $query = "SELECT * FROM kategori";
        $result = mysqli_query($this->db, $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}
?>