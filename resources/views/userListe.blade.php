<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>

    <style>
        .kutu{
            position: absolute;
            background: whitesmoke;
            margin-left: 350px;
            margin-top:0px;
            width:500px;
            height:350px;
            padding: 15px;
            border-radius: 30px;
        }
        .kutu:hover{
            position: absolute;
            background: whitesmoke;
            margin-left: 350px;
            margin-top:0px;
            padding: 15px;
            border-radius: 30px;
            box-shadow: 5px 15px 20px purple;
        }
        button,input{
            background: whitesmoke;
            border-radius: 5px;
            box-shadow: 2px 2px 3px purple;
            outline: none;
            padding:2px;
        }
        button:hover,input:focus{
            background: whitesmoke;
            border-radius: 5px;
            box-shadow: 2px 2px 3px purple;
            outline: none;
            padding:2px;
        }
    </style>
</head>
<body>
    <div class="kutu">
        <div class="row">
            <?php 
                echo "<table border='1' width='500px' height='200px'>";
                echo "<tr>";
                echo "<th>User İd</th>";
                echo "<th>Score</th>";
                echo "<th>Rank</th>";
                echo "</tr>";
                for($i=0;$i<count($kayitlar);$i++){
                    echo "<tr>";
                    echo "<td>",$kayitlar[$i]->User_id,"</td>";
                    echo "<td>",$kayitlar[$i]->Score,"</td>";
                    echo "<td>",$kayitlar[$i]->Rank,"</td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>    
        <a href="http://localhost:8000/Anasayfa"> <button>Anasayfa</button> </a>
    </div>

</body>
</html>