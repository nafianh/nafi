<?php session_start();
if (isset($_SESSION['username'])){

include "koneksi.php";
 $query=mysql_query("select * from biodata");
 $jumlah=mysql_num_rows($query);
 echo "Selamat datang : ".$_SESSION['username'];
 echo "<br><br>";
 echo "Jumlah data ada : ".$jumlah;
 ?>
 <br><a href="insert.php">Input Data</a>
 <table border="1">
 <tr>
 <th>No</th>
 <th>ID</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Usia</th>
 <th>Aksi</th>
 </tr>
 <?php
 $no=0; 
 
 while($row=mysql_fetch_array($query)){
 ?>
<br>
 
 <tr>
 <td><?php echo $no=$no+1;?></td>
 <td><?php echo $row['id'];?></td>
 <td><?php echo $row['nama'];?></td>
 <td><?php echo $row['alamat'];?></td>
 <td><?php echo $row['usia'];?></td>
 <td>
 <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return
confirm('Apakah anda yakin?')">Delete</a>
 <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
 </td>
 </tr>
 <?php
 }
 ?>
 </table><br />
 <a href="logout.php">Logout</a>
  
<?php
}else{
 ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="form_admin.php">Login
dahulu</a><?php
}
?> 
