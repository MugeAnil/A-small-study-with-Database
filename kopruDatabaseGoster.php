	<?php error_reporting(E_ALL ^ E_NOTICE);
		
		$host="localhost";
		$kullanici="****";
		$sifre="****";
		$veritabani="kopru";
		
		try{
			if($baglan=mysql_connect($host,$kullanici,$sifre)){ echo "" ;}
			else { throw new Exception('baglnılamadı');}
				
			if(!mysql_select_db($veritabani,$baglan)){throw new Exception('Unable to connect to database');}
				

		} catch (Exception $e) { echo $e->getMessage(); }
	   
		
		
		$radv =$_POST['kopru'];
	   
	    
		if( $radv== "a" ){
			
			deger($radv);
			
				$islem = "";
				if(isset($_GET ["Islem"])){
				$islem = $_GET ["Islem"];
				}
				if ($islem == "Kaydet"){
					if(isset($_POST['submit'])){	
						if(isset($_POST['name'])){ 
							$name = $_POST['name']; 
						} 
					}
				
			
					$sql = "SELECT * FROM kopru WHERE ( KOPRUAD1 ='".$name."')" ;
					$result = mysql_query($sql,$baglan);	
					
					while($row = mysql_fetch_array($result)) {
					?><label class="radio"><?php echo "<br>".$row["KOPRUAD1"]."-".$row["SIRANO"]."-".$row["SICIL"]."-".$row["BNO"]."<br>"; ?></label><?php
					}
				}
		}elseif( $radv=="c"){
			$sicil=deger($radv);
			
				$islem = "";
				if(isset($_GET ["Islem"])){
				$islem = $_GET ["Islem"];
				}
				if ($islem == "Kaydet"){
					if(isset($_POST['submit'])){	
						if(isset($_POST['name'])){ 
							$sicil = $_POST['name']; 
						} 
					}
					   
					$sql = "SELECT * FROM kopru WHERE ( SICIL='".$sicil."')" ;
					$result = mysql_query($sql,$baglan);	
					
					while($row = mysql_fetch_array($result)) {
					?><label class="radio"><?php echo "<br>".$row["KKNO"]."-".$row["KKKM"]."-".$row["BNO"]."-".$row["KOPRUAD1"]."-".$row["KOPRUAD2"]."-".$row["ILI"]."-".$row["YOLS1"]."<br>";?></label><?php
					}
				}
		
		}else if( $radv=="d"){
			deger($radv);
			
				$islem = "";
				if(isset($_GET ["Islem"])){
				$islem = $_GET ["Islem"];
				}
				if ($islem == "Kaydet"){
					if(isset($_POST['submit'])){	
						if(isset($_POST['name'])){ 
							$bolge = $_POST['name']; 
						} 
					}
					   
					$sql = "SELECT * FROM kopru WHERE ( YOLS1 ='".$bolge."')" ;
					$result = mysql_query($sql,$baglan);	
					
					while($row = mysql_fetch_array($result)) {
					?><label class="radio"><?php echo "<br>".$row["KOPRUAD1"]."-".$row["SIRANO"]."-".$row["SICIL"]."-".$row["BNO"]."<br>";?></label><?php
					}
				}
		}else if( $radv=="e"){
			deger($radv);
			
				$islem = "";
				if(isset($_GET ["Islem"])){
				$islem = $_GET ["Islem"];
				}
				if ($islem == "Kaydet"){
					if(isset($_POST['submit'])){	
						if(isset($_POST['name'])){ 
							$su = $_POST['name']; 
						} 
					}
					$sql = "SELECT * FROM kopru WHERE ( DOSUzl >='".$su."')" ;
					$result = mysql_query($sql,$baglan);	
					
					while($row = mysql_fetch_array($result)) {
					?><label class="radio"><?php echo "<br>".$row["KKNO"]."-".$row["KKKM"]."-".$row["BNO"]."-".$row["KOPRUAD1"]."-".$row["KOPRUAD2"]."-".$row["ILI"]."-".$row["YOLS1"]."<br>";?></label><?php
					}
				}
		}else if( $radv=="f"){
			deger($radv);
			
				$islem = "";
				if(isset($_GET ["Islem"])){
				$islem = $_GET ["Islem"];
				}
				if ($islem == "Kaydet"){
					if(isset($_POST['submit'])){	
						if(isset($_POST['name'])){ 
							$su = $_POST['name']; 
						} 
					}
					$sql = "SELECT * FROM kopru WHERE ( KKKM ='".$su."')" ;
					$result = mysql_query($sql,$baglan);	
					
					while($row = mysql_fetch_array($result)) {
					?><label class="radio"><?php echo $row["KOPRUAD1"]."-".$row["KOPRUAD2"]."-"."<br>";?></label><?php
					}
				}
		} 
		
		function deger($value){?>
			<link rel="stylesheet" href="kopru.css" media="screen">
			<div class="pos">
			 <label class="title">Aramak Istediginiz Veriyi Giriniz</label>
			</div>
			<form id="form1" name="form1" method="POST" action="kopruDatabaseGoster.php?Islem=Kaydet" >
			<label class="radio"><input type="hidden" name="kopru" value="<?=$value?>" /><br></label>
			<label class="radio"><input id="name" name="name" type="text" /><br></label>
			<label class="radio"><input type="submit" name="submit" value="Ara"/></label>
			</form>
		<?php  }	?>
