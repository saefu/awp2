<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>tugas awp 2</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="wrapper">
      <h1><a href="/"><img src="images/logo.gif" width="250" height="36" alt="Personal Site" /></a></h1>
      <ul id="nav">
          <li class="b"><a href="index.html">Home</a></li>
          <li class="a"><a href="buatxml1.php">xml</a></li>
          <li class="d"><a href="encodejson.php">json</a></li>
          <li class="e"><a href="bacajson3.php">baca json</a></li>
		  <li class="c"><a href="bacaxml.php">baca xml</a></li>
      </ul>
      <div id="body">
          <div class="inner">
              <img src="images/left_photo.jpg" width="194" height="299" alt="My photo" class="left" />
                            
              <h1>hasil baca encode xml</h1>
			  <h1> daftar pelanggan air minum</h1>
              <div class="indent" content-type:text/xml>
                   
									<table border=1>
								<tr>
									<th>kode</th>
									<th>nama</th>
									<th>alamat</th>
									<th>no telpon</th>
									
								</tr>
								
								<?php
								$url = "http://syaifulawp2.eu.pn/buatxml1.php";
								$xml = simplexml_load_file($url) 
										or die("Something error");
						
								foreach($xml as $data){
								?>
								<tr>
									<td><?php echo $data->kode_pelanggan; ?></td>
									<td><?php echo $data->nama; ?></td>
									<td><?php echo $data->alamat; ?></td>
									<td><?php echo $data->telpon; ?></td>
									
								</tr>
								<?php
								}
								?>
							</table>
				  
              </div>
              
              <div id="dividerx"><img src="images/divider_cut.gif" width="28" height="12" alt="" /></div>
              
              <div id="boxes">
                  <div><div class="inner">
                      <div id="left"><div class="inner">
                          <h2><img src="images/title_join_my_club.gif" width="86" height="20" alt="join my club" /></h2>
                          <p>This is a demo text. It will be replaced by the original.</p>
                          <p>This is a demo text. It will be replaced by the original. This is a demo text. </p>
                          <p class="readmore"><a href="http://www.freewebsitetemplates.com">...Join Now</a></p>
                      </div></div><!-- end left -->
                      <div id="right"><div class="inner">
                          <h2><img src="images/title_enter.gif" width="139" height="20" alt="enter my dreamland" /></h2>
                          <ul class="left">
                              <li><a href="http://www.freewebsitetemplates.com">My music</a></li>
                              <li><a href="http://www.freewebsitetemplates.com">My movies</a></li>
                              <li><a href="http://www.freewebsitetemplates.com">My sports</a></li>
                              <li><a href="http://www.freewebsitetemplates.com">My paintings</a></li>
                          </ul>
                          <p>This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text.</p>
                          <p>This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text.</p>
                      </div></div><!-- end right -->
                      <div class="clear"></div>
                  </div></div>
              </div><!-- end boxes -->
          </div><!-- end .inner -->
      </div><!-- end body -->
      <div id="footer">
	  	<!-- Do not remove -->
			Powered by <a href="http://www.freewebsitetemplates.com">Free Website Templates</a>
		<!-- Do not remove End -->
      </div><!-- end footer -->
  </div><!-- end wrapper -->
</body>
</html>