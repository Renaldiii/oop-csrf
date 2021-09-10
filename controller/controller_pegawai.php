<?php

// Class pegawai (CRUD pegawai)
class controller_pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $mpegawai;

     var $nip;
     var $nama;
     var $jns_kel;
     var $tgl_lahir;
     var $status;
     var $mulai_kerja;

     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../model/model_pegawai.php';
            $this->mpegawai = new model_pegawai();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData($nip,$nama,$jns_kel,$tgl_lahir,$status,$mulai_kerja){

        // perintah POST data
        $this->mpegawai->POST($nip,$nama,$jns_kel,$tgl_lahir,$status,$mulai_kerja);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->mpegawai->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($nip){

        // perintah GET data
        return $this->mpegawai->GET_Where($nip);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData($nip,$nama,$jns_kel,$tgl_lahir,$status,$mulai_kerja){

        // perintah PUT data
        $this->mpegawai->PUT($nip,$nama,$jns_kel,$tgl_lahir,$status,$mulai_kerja);

    }




    // Method untuk menghapus data dari table
    function DELETEData($nip){

        // perintah DELETE data
        $this->mpegawai->DELETE($nip);

    }

}

?>