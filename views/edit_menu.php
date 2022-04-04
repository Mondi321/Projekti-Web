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
    require_once '../controllers/controller1.php';
    if(isset($_GET['id'])){
        $menuId = $_GET['id'];
    }

    $menu = new Controller1;
    $currentMenu = $menu->edit($menuId);


    if (isset($_POST['submit'])){
        $menu->update($_POST, $menuId);
    }

?>

<div id="dashboard">
    <table>
        <tr>
            <th>Emri</th>
            <th>Email</th>
            <th>Numri Telefonit</th>
        </tr>
        <form method = "POST">
        <tr>
            <td><input type="text" name = "emri1" value = "<?php echo $currentMenu['emri']; ?>"></td>
            <td><input type="text" name = "email1" value = "<?php echo $currentMenu['email']; ?>"></td>
            <td><input type="text" name = "numriTel1" value = "<?php echo $currentMenu['numriTel']; ?>"></td>
            <td><input type="submit" name = "submit" value = "Update"></td>
        </tr>
        </form>
    </table>
</div>