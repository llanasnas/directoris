<html>
<head>
    <title>Fusió de fitxers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container text-center">
    <table class="table text-center">

        <thead>
        <tr>
            <th class="title">Directoris</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php
                include_once("fusio_directoris.inc");
                include_once("constants.inc");
                llistar_directoris(DIRECTORI_BASE);
                ?></td>

        </tr>
        </tbody>
    </table>

    <br>
    <div>Escriviu el nom dels dos directoris a fusionar</div>
    <br>
    <form method="post" action="fusiona.php">
        <div>Nom del primer directori a fusionar:</div>
        <div><input type="text" name="dir1" size=50></div>
        <br>
        <div>Nom del segon directori a fusionar:</div>
        <div><input type="text" name="dir2" size=50></div>
        <br>
        <div>Nom de directori fusionat:</div>
        <div><input type="text" name="dirfusionat" size=50></div>
        <br>
        <div><input type="submit" class="btn btn-success" name="submit" value="submit"></div>
    </form>
</div>
</body>

</html>
