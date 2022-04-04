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
    require_once '../controllers/controller4.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $edit = new Controller4;
    $e = $edit->edit($id);

    if(isset($_POST['submit'])){
        $edit->update($_POST, $id);
    }
?>

<div id="dashboard">
    <table>
        <tr>
            <th>Emri</th>
            <th>Email</th>
            <th>Mesazhi</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "emri" value = "<?php echo $e['emri']; ?>"></td>
            <td><input type="text" name = "email" value = "<?php echo $e['email']; ?>"></td>
            <td><input type="text" name = "mesazhi" value = "<?php echo $e['mesazhi']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>