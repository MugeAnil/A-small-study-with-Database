<html>
<head>
	<title>Kopru</title>
	<link rel="stylesheet" href="kopru.css" media="screen">
</head>
<body>
<form id="form1" name="form1" method="POST" action="kopruDatabaseGoster.php" >

	<div class="pos">
	 <label class="title">Aramak Istediginiz Secenegi Tiklayiniz</label>
	</div>
	<div class="pos">
	<label class="radio"><input type="radio" name="kopru" id="a" value="a" >Istenilen Kopruyu listelemek icin<br></label>
	<label class="radio"><input type="radio" name="kopru" id="c" value="c">Istenilen kopruyu sicilden aramak icin<br></label>
	<label class="radio"><input type="radio" name="kopru" id="d" value="d">Istenilen bolgedeki kopruleri listelemek icin<br></label>
	<label class="radio"><input type="radio" name="kopru" id="e" value="e">Istenilen suyun ustundeki kopruleri listelemek  icin<br></label>
	<label class="radio"><input type="radio" name="kopru" id="f" value="f">Istenilen proje hesap kodundaki kopruleri listelemek icin icin<br></label>
	<label class="radio"><input type="submit" name="submit"  value="Gonder"/></label>
	</div>

</form>
</html>
