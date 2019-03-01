<?php
include("ayar.php");
sleep(1);
$value=$_POST["value"];

if(!$value){
	echo "bir kelime giriniz";
}else{
	
	$row=$db->prepare("select * from kitaplar where adi like ? "); 
	$row->execute(array("%".$value."%"));
	$goster = $row->fetchAll(PDO::FETCH_ASSOC);
	$x=$row->rowCount();
	
	
	
	if($x){
				
			foreach($goster as $liste ){
				echo  "<a href='http://localhost/ara/kitaplar'>".$liste["adi"]."</a><br/>"; 
			}
				
				
				
		
	}else{
		echo "aradıgınız keklıme bulunamadı";
	}
}



?>