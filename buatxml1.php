<?php 
						
                                       
						//Koneksi database MySQL
						$koneksi = mysqli_connect("fdb14.freehostingeu.com","2261097_air","ASD12345678","2261097_air") 
							or die("Error ".mysqli_error($koneksi));
                                                
                                                
						//Mengambil data pada table dari database MySQL
						$sql = "select * from pelanggan";
						$result = mysqli_query($koneksi, $sql) 
							or die("Query gagal dijalankan");
						//Membuat array
                                                header("Content-type: text/xml");
						echo "<pelanggan>";
	
						while($plg = mysqli_fetch_assoc($result))
                                                
						{
							echo "<daftar_pelanggan>";
								echo "<kode_pelanggan>".$plg["kd_pelanggan"]."</kode_pelanggan>";
								echo "<nama>".$plg["nama"]."</nama>";
								echo "<alamat>".$plg["alamat"]."</alamat>";
								echo "<telpon>".$plg["no_telpon"]."</telpon>";
							echo "</daftar_pelanggan>";
						}
	
						echo "</pelanggan>";
						
						//close the db connection
                                                mysqli_close($koneksi);
	?>