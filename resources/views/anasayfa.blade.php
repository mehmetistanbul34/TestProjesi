<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anasayfa</title>

    <style>
    .kutu{
        position: absolute;
        background: whitesmoke;
        margin-left: 350px;
        margin-top:150px;
        padding: 35px;
        border-radius: 30px;
    }
    .kutu:hover{
        position: absolute;
        background: whitesmoke;
        margin-left: 350px;
        margin-top:150px;
        padding: 35px;
        border-radius: 30px;
        box-shadow: 5px 15px 20px grey;
    }
    button,input,button.tahta{
        background: black;
        border-radius: 6px;
        box-shadow: 5px 5px 5px red;
        color:red;
        outline: none;
        padding:5px;
    }
    button:hover,input:focus,button.tahta:hover{
        background: red;
        border-radius: 6px;
        box-shadow: 5px 5px 5px black;
        color:black;
        outline: none;
        padding:5px;
    }
    </style>
</head>
<body>
<div class="kutu">
        <div class="row">
                <table>
                    <tr>
                        <td><a href="http://localhost:8000/get_games"> <button>Get_Games</button> </a></td>
                        <td><a href="http://localhost:8000/registerPage"> <button>Game Ekle</button> </a></td>
                        <td><a href="http://localhost:8000/updatePage"> <button>Game Güncelle</button> </a></td>
                        <td><a href="http://localhost:8000/deletePage"> <button>Game Sil</button> </a></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><a href="http://localhost:8000/get_gamers"> <button>Get_Gamers</button> </a></td>
                        <td><a href="http://localhost:8000/registerGamerPage"> <button>Gamer Ekle</button> </a></td>
                        <td><a href="http://localhost:8000/updateGamerPage"> <button>Gamer Güncelle</button> </a></td>
                        <td><a href="http://localhost:8000/deleteGamerPage"> <button>Gamer Sil</button> </a></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><a href="http://localhost:8000/getGames"> <button>get_games</button> </a></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>get_scoreboard / <a href="http://localhost:8000/skorboard/1"> <button>1</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/2"> <button>2</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/3"> <button>3</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/4"> <button>4</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/5"> <button>5</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/6"> <button>6</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/7"> <button>7</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/8"> <button>8</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/9"> <button>9</button></a></td>
                        <td><a href="http://localhost:8000/skorboard/10"> <button>10</button></a></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><a href="http://localhost:8000/skorTahtasi"> <button class="tahta">Skor Tahtası</button> </a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>