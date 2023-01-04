<?php



	$con=mysqli_connect('localhost','root','','aromatic_data_base');

    $pog="SELECT count(estado) as amogus FROM table aromatic_data_base where estado=5";
    $consultas = mysqli_query($con, $pog);

            $consultas = mysqli_query($con, $pog);
            $item=mysqli_fetch_array ($consultas);


echo ('<h1>' . $item['amogus'] . '</h1>');
	
    
    
    ?>