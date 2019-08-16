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
        box-shadow: 5px 15px 20px grey;
    }
    button,input{
        background: whitesmoke;
        border-radius: 5px;
        box-shadow: 2px 2px 3px grey;
        outline: none;
        padding:2px;
    }
    button:hover,input:focus{
        background: whitesmoke;
        border-radius: 5px;
        box-shadow: 2px 2px 3px grey;
        outline: none;
        padding:2px;
    }
    </style>
</head>
<body>
<div class="kutu">
        <div class="row">
                <table>
                    <tr>
                        <td><a href="http://localhost:8000/show"> <button>Listele</button> </a></td>
                        <td><a href="http://localhost:8000/registerPage"> <button>Kaydet</button> </a></td>
                        <td><a href="http://localhost:8000/updatePage"> <button>Güncelle</button> </a></td>
                        <td><a href="http://localhost:8000/deletePage"> <button>Sil</button> </a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>