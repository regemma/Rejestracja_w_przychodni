<?php 
$link = mysqli_connect('localhost','root','x955'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
}
else{
   echo 'Connection OK';
   if(mysqli_select_db($link, 'przychodnia')){
       echo '<br>wyba³em baze<br>';
   }
 else {
     echo 'nie udalo sie';
   }
     $query="INSERT INTO `pracownicy`(`imie`, `nazwisko`, `tytul`) VALUES ('Janusz','Szyszko','lek.')";
     $query="INSERT INTO pracownicy(imie, nazwisko, tytul) VALUES ('Janusz','Zagórski','lek.')";
    if($result=mysqli_query($link, $query))
   {echo "wykonany insert";}
   else echo "insert si enie pwiodl";
   $query='SELECT * FROM pracownicy';
   if($result=mysqli_query($link, $query))
   {echo "wykonany select";}
   else echo "select si enie pwiodl";
   if($row=  mysqli_fetch_array($result)){
       echo "$row[imie] - $row[nazwisko]<br>";
   }
   mysqli_close($link);  
}

?> 