<?php 

include '../controller/controller_pegawai.php';
 // Membuat Object dari Class pegawai
$pegawai = new controller_pegawai();
$Getpegawai = $pegawai->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table Pegawai</h3><h3><a href="view_post_pegawai.php">Tambah Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Mulai Kerja</th>
                <th>Tools</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPegawai))
                {
                        $no = 1;
                        foreach($Getpegawai as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nip']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td>
                                <?php
                                 if($Get['jns_kel']=="L")
                                    {
                                        echo "Laki-Laki";
                                    }
                                    else{
                                        echo "Perempuan";
                                    }
                                ?>
                            </td>
                            <td><?php echo $Get['tgl_lahir']; ?></td>
                            <td>
                                <?php
                                 if($Get['status']=="B")
                                    {
                                        echo "Belum Menikah";
                                    }
                                    else{
                                        echo "Menikah";
                                    }
                                ?>
                            </td>
                            <td><?php echo $Get['mulai_kerja']; ?></td>
                            <td>
                                
                                <a href="../view/view_put_pegawai.php?nip=<?php echo $Get['nip'] ?>">Update</a>
                                <a href="../config/routes.php?function=delete_pegawai&nip=<?php echo $Get['nip'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>