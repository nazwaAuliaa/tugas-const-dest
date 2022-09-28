<?php
// buat class absensikaryawan
class absensikaryawan {
  
   public $jabatan = "karyawan";
   public $tanggal = "06 juni";
   
  
   public function tampilkan_cafekopi(){
     echo "jabatan : $this->jabatan, tanggal : $this->tanggal";
  }
  public function __construct(){
    echo "Ini berasal dari Constructor absensikaryawan";
  }

}
  $absensikaryawan = new absensikaryawan;