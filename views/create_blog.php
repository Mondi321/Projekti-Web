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
    session_start();
    require_once '../controllers/blog.php';

    $date = new DateTime();
    $DateTime = $date->format("d-m-Y h:i a");

    $_SESSION['data'] = $DateTime;

    $insert = new Blog;
    if (isset($_POST['submit']) && isset($_SESSION['emri']) && isset($_SESSION['data'])){
        $insert->insert($_POST, $_SESSION);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Foto</th>
            <th>Titulli</th>
            <th>Pershkrimi</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="file" name = "foto" ></td>
            <td><input type="text" name = "titulli" placeholder = "Shto titullin..."></td>
            <td><input type="text" name = "pershkrimi" placeholder = "Shto pershkrimin..."></td>
            <td><input type="submit" name = "submit" value = "Save"></td>
        </tr>
        </form>
    </table>
</div>