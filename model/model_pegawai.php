<?php

// Class pegawai (CRUD pegawai)
class model_pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $nip;
     var $nama;
     var $jns_kel;
     var $tgl_lahir;
     var $status;
     var $mulai_kerja;

     

     // Method main variabel
        function __construct()
        {
        // Membuat Object dari Class database
        include '../config/database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
        }




    // Method untuk memasukan data ke dalam table
    function POST ($nip,$nama,$jns_kel,$tgl_lahir,$status,$mulai_kerja){

        mysqli_query($this->con,"insert into tbl_pegawai values(
            '".$nip."',
            '".$nama."',
            '".$jns_kel."',
            '".$tgl_lahir."',
            '".$status."',
            '".$mulai_kerja."'
            )");

    }

    
    // Method untuk mengambil semua data dari table
    function GET (){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from tbl_pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi dari table
    function GET_Where ($nip){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from tbl_pegawai where nip='$nip'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk memasukan data ke dalam table
    function PUT ($nip,$nama,$jns_kel,$tgl_lahir,$status,$mulai_kerja){

        // perintah PUT data
        mysqli_query($this->con,"update tbl_pegawai set
            nama='".$nama."',
            jns_kel='".$jns_kel."',
            tgl_lahir='".$tgl_lahir."',
            status='".$status."',
            mulai_kerja='".$mulai_kerja."'
            where nip='".$nip."'
            ");

    }




    // Method untuk menghapus data dari table
    function DELETE ($nip){

        // perintah DELETE data
        mysqli_query($this->con,"delete from tbl_pegawai where nip='$nip'");

    }


}

?>