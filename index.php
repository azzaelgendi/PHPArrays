<!DOCTYPE html>
<!--InClass 8 Azza Elgendy-->
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>InClass8 Azza Elgendy</title>
            <link rel="stylesheet" href="main.css" />
    </head>
    <?php
	function CreateCheckList()
	{
		$check_list = array ( "N0"=>"Conestoga Casserole","N1"=>"Conestoga Sandwich","N2"=>"Conestoga Pie","N3"=>"Grilled Conestoga","N4"=>"Conestoga Surprise");
		$nList='';
		while(list($k,$v)=each($check_list))
		{
			$nList.= "<li>".$v.'<input type="checkbox" name="check_list[]" value="'.$v.'"/>'."</li>"."</br>";
		}

		return $nList;
	}
?>
    <body>
        <div class="container">
        <div class="main">
            <h2>Conestoga College<br>On Line Survey</h2>
            <form action="ProcessData.php" method="post">
                <?php
                    echo CreateCheckList();
                ?>
                <input type="submit" id="button" name="submit" Value="Submit"/>
                <input type="reset" id="button" value="Erase and Restart">
            </form>
        </div>
        </div>
</body>
</html>