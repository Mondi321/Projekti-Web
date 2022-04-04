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
    require_once '../controllers/blog.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $e = new Blog;
    $edit = $e->edit($id);

    if(isset($_POST['submit'])){
        $e->update($_POST, $id);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Foto</th>
            <th>Titulli</th>
            <th>Pershkrimi</th>
            <th>Data</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "foto" value = "<?php echo $edit['foto']; ?>"></td>
            <td><input type="text" name = "titulli" value = "<?php echo $edit['titulli']; ?>"></td>
            <td><input type="text" name = "pershkrimi" value = "<?php echo $edit['pershkrimi']; ?>"></td>
            <td><input type="date" name = "data" value = "<?php echo $edit['data']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>