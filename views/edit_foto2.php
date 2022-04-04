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
    input[type=submit]{
        border-radius:10px;
        padding:3px 7px;
    }
</style>

<?php
    require_once '../controllers/produktet.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $edit = new Produktet;
    $e = $edit->edit($id);

    if (isset($_POST['submit'])){
        $edit->update1($_POST, $id);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Foto</th>
            <th>Brendi</th>
            <th>Cmimi Pare</th>
            <th>Cmimi Dyte</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "foto2" value = "<?php echo $e['foto'] ?>"></td>
            <td><input type="text" name = "brendi2" value = "<?php echo $e['brendi'] ?>"></td>
            <td><input type="text" name = "cmimiPare" value = "<?php echo $e['cmimiPaZbritje'] ?>"></td>
            <td><input type="text" name = "cmimiDyte" value = "<?php echo $e['cmimiMeZbritje'] ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>