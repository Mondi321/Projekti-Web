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

    $e = new Produktet;
    $edit = $e->edit($id);

    if (isset($_POST['submit'])){
        $e->updateBS($_POST, $id);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Foto</th>
            <th>Brendi</th>
            <th>Cmimi</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "foto" value = "<?php echo $edit['foto'] ?>"></td>
            <td><input type="text" name = "brendi" value = "<?php echo $edit['brendi'] ?>"></td>
            <td><input type="text" name = "cmimiPaZbritje" value = "<?php echo $edit['cmimiPaZbritje'] ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>