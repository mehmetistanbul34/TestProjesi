<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>

    <style>
    .kutu{
        position: absolute;
        background: whitesmoke;
        margin-left: 500px;
        margin-top:150px;
        padding: 35px;
        border-radius: 30px;
    }
    .kutu:hover{
        position: absolute;
        background: whitesmoke;
        margin-left: 500px;
        margin-top:150px;
        padding: 35px;
        border-radius: 30px;
        box-shadow: 5px 15px 20px blue;
    }
    button,input{
        background: whitesmoke;
        border-radius: 5px;
        box-shadow: 2px 2px 3px blue;
        outline: none;
        padding:2px;
    }
    button:hover,input:focus{
        background: whitesmoke;
        border-radius: 5px;
        box-shadow: 2px 2px 3px blue;
        outline: none;
        padding:2px;
    }
    </style>
</head>
<body>
    <div class="kutu">
        <div class="row">
            <form action="{{ route('update')}}" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                    </tr>
                    <tr>
                        <td>Game_id : </td>
                        <td><input type="int" name="game_id"></td>
                    </tr>
                    <tr>
                        <td>Game_title : </td>
                        <td><input type="text" name="game_title"></td>
                    </tr>
                    <tr>
                        <td>Unique_users : </td>
                        <td><input type="int" name="unique_users"></td>
                    </tr>
                    <tr>
                        <td>Total_play_count : </td>
                        <td><input type="int" name="total_play_count"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit">Send</button></td>
                    </tr>
                </table>
            </form>
            <a href="http://localhost:8000/Anasayfa"> <button>Anasayfa</button> </a>
        </div>
    </div>
</body>
</html>