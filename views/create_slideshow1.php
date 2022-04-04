<link rel="stylesheet" href="../css/dashboard.css">

<style>
    #dashboard{
        margin-top:20px;
    }
    input{
        background-color:darkred;
        color:white;
        padding:3px 7px;
    }
    ::placeholder{
        color:white;
    }
    input[type=file]::file-selector-button{
        background-color:red;
        border:none;
    }
    input[type=submit]{
        border-radius:10px;
        padding:3px 7px;
    }
</style>
<?php 
    require_once '../controllers/produktet.php';

    $insert = new Produktet;

    if(isset($_POST['submit'])){
        $insert->insertS1($_POST);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Foto</th>
            <th>Brendi</th>
            <th>Pershkrimi</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="file" name = "foto" ></td>
            <td><input type="text" name = "brendi" placeholder = "Shto brendin..."></td>
            <td><input type="text" name = "pershkrimi" placeholder = "Shto pershkrimin..."></td>
            <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>