<!DOCTYPE html>
<!--InClass 8 Azza Elgendy-->
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>InClass8 Azza Elgendy</title>
            <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <div class="container">
        <div class="main">
            <h2>Conestoga College<br> On Line Survey Result</h2>
            <?php
                if(isset($_POST['submit']))
                {
                    if(!empty($_POST['check_list']))
                    {
                        $checked_count = count($_POST['check_list']);
                        echo "You have selected following ".$checked_count." option(s): <br/>";
                        foreach($_POST['check_list'] as $selected)
                        {
                            echo "<li>".$selected ."<br>"."</li>";
                        }
                }
                else
                {
                    echo "<b>Please Select Atleast One Option.</b>";
                }
                }
            ?>
        </div>
        </div>
    </body>