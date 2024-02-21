<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Dashboard.html");
    exit;}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<LINK href="cthsurat.css" rel=stylesheet type=text/css>
<title></title>
<script language="JavaScript" type="text/JavaScript">

window.onload = function ()
			{
				window.print();
			}
	</script>
</head>

<body>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  
  <tr>
    <td height="404"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
                <td width="49%" height="65"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					<tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					<tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>					
					<tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					<tr>
                      <td><img src="logojpns.jpeg" width="60" height="60" /></td>
						<td>Jabatan Pendidikan Negeri Sembilan <br />
							Jalan Dato' Hamzah,<br />
							70990 Seremban,<br />
							Negeri Sembilan Darul Khusus.</td>					  
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
            <td width="51%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="15%" height="55" valign="top"><div align="center"></div>&nbsp;</td>
                      <td width="85%" valign="bottom"><div align="center">&nbsp;</div></td>
                    </tr>                    
					<tr> 
                      <td width="15%" height="55" valign="top"><div align="center"></div>&nbsp;</td>
                      <td width="85%" valign="bottom"><div align="center">Tel: 06-765 3100</div></td>
                    </tr>
                  </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="96%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr> 
               </tr>
              <tr><tr>
                    </tr>

                  </table>
                  
                </td>
            
              </tr>	  
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="49%" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td width="80%">&nbsp;</td>
                      <td width="3%">&nbsp;</td>
                      <td width="80%">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</tr>
                    <tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr> 
                      <td>En. Anan bin Abdullah</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</tr>
                    <tr> 
                      <td>Pengetua SMK Mantin</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</tr>
                    <tr> 
                      <td>Tuan</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					<tr> 
                      <td><b>SURAT LANTIKAN PENTAKSIR</b></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					<tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					<tr> 
                      <td>Perkara diatas adalah dirujuk.</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					<tr> 
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>					
                  </table></td>
                <td width="51%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="74%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr> 
                            <td width="40%">&nbsp;</td>
                            <td width="15%">&nbsp;</td>
                            <td width="37%">&nbsp;</td>
                          </tr>
                          <tr>
							<td>&nbsp;</td>
                            <td>Ruj:</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr> 
                            <td>&nbsp;</td>
                            <td>Tarikh:</td>
                            <td><font 
      color="#6699cc" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif">
<script language="JavaScript" type="text/JavaScript">
            
            <!-- begin script
            function MakeArray(n) {
            this.length=n;
            for (var i=0; i <= N; I++) {
            this[i]='0' }
            return this
            }
           
            function display_date() 
			{            
            date=new Date();
            var day_of_week_number=date.getDay();
            var day_of_month=date.getDate();
            var month_number=date.getMonth();
            var year=2021;
            var day_of_week='';
            var month=''
            
            if(month_number == 0){month='Januari';}
            if(month_number == 1){month='Februari';}
            if(month_number == 2){month='Mac';}
            if(month_number == 3){month='April';}
            if(month_number == 4){month='Mei';}
            if(month_number == 5){month='Jun';}
            if(month_number == 6){month='Julai';}
            if(month_number == 7){month='Ogos';}
            if(month_number == 8){month='September';}
            if(month_number == 9){month='Oktober';}
            if(month_number == 10){month='November';}
            if(month_number == 11){month='Disember';}
            
            var date_to_show=day_of_month + ' ' + month + ' ' + year;
            document.write(date_to_show);
            }
            

document.write
              display_date()
              //-->            
                  </script>
                              </font></font></td>
                          </tr>
                          <tr> 
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td width="50%">&nbsp;</td>
                          </tr>
                          <tr> 
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr> 
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr> 
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr> 
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                        </table></td>
                     </tr>
                  </table></td>
              </tr>
            </table></td>
      </tr>
              <tr><table>
				<tr>
                <td>2. Sukacitanya dimaklumkan bahawa beberapa orang pentaksir akan dihantar ke sekolah tuan bagi mentaksir beberapa mata pelajaran.</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>				
				<tr>
                <td>3. Jadual pentaksiran adalah seperti berikut:</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td><?php
				require_once "config.php";
				
				$sql1 = "SELECT nama, tarikh, masa, subjek FROM pentaksir WHERE namaSekolah='SMK Mantin'";
				
				if($result = mysqli_query($conn, $sql1)){
				if (mysqli_num_rows($result) > 0) {
				echo "<table width='100%' border='1' cellpadding='1' cellspacing='0'><tr>
				<td>Nama</td>
				<td>Subjek</td>
				<td>Tarikh</td>
				<td>Masa</td>
				</tr>";
				// output data of each row
				while($row = mysqli_fetch_array($result)) {
					echo "<tr><td>" . $row["nama"]. "</td>
						<td>" . $row["subjek"]. "</td>
						<td>" . $row["tarikh"]. "</td>
						<td>" . $row["masa"]. "</td>
						</tr>";
				}
				echo "</table>";
				mysqli_free_result($result);
				} else {
					echo "-";
				}
				}else {
					echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
					}
				mysqli_close($conn);
				?></td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
				<tr>
                <td>Diharapkan dengan adanya pentaksiran sebegini, pihak sekolah akan dapat menambah mutu pembelajaran sedia ada seperti yang telah ditetapkan oleh Kementerian Pendidikan Malaysia.</td>
				</tr>
				<tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td>Sekian, terima kasih.</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td>&nbsp;</td>
				</tr>
				<tr>
                <td><b>......................................</b></td>
				</tr>
				<tr>
                <td>(Ahmad bin Muhammad)</td>
				</tr>
				<tr>
                <td>Pengarah JPN Negeri Sembilan</td>
				</tr>				
				</table></tr>
            </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>