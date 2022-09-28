<?php
// buat class absensikaryawan
class absensikaryawan {
  
   public $jabatan = "karyawan";
   public $tanggal = "06 juni";
   
   public function tampilkan_absensikaryawan(){
     echo "jabatan : $this->jabatan, tanggal : $this->tanggal";
  }
  
  public function __construct(){
    echo "Ini berasal dari Constructor absensikaryawan";
  }
  public function __destruct(){
    echo "Ini berasal dari Destructor absensikaryawan";
  }

}
  $absensikaryawan = new absensikaryawan;
  echo"<br/>";
  $absensikaryawan->tampilkan_absensikaryawan();
  echo"<br/>";