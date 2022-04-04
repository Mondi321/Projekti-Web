<?php 
    
    session_set_cookie_params(['samesite' => 'None']);
    session_start();
    require_once '../controllers/controller1.php';
    require_once '../controllers/produktet.php';
    require_once '../controllers/controller4.php';
    require_once '../controllers/blog.php';
    include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Document</title>
</head>


<body>
    <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <a href="../index.php">home</a>
        <a href="../product.php">products</a>
        <a href="../about.php">about us</a>
        <a href="../contact.php">contact us</a>
    </nav>
    <br><br>
    <h1 class = "h1">WELCOME BACK <?php echo $_SESSION['emri']; ?></h1><br><br>
    <?php if (isset($_SESSION['email']) && $_SESSION['email'] == 'admin123@admin.com'){
        ?>
        <div id = "dashboard">
            <table class="content-table">
                <caption>USERS</caption>
                    <tr>
                        <th>ID</th>
                        <th>Emri</th>
                        <th>Email</th>
                        <th>Numri Telefonit</th>
                        <td class = "menu11">
                            <a href="../signin.php">Regjistro</a>
                        </td>
                    </tr>
                <?php
                $m = new Controller1();
                $allMenu = $m->readData();
                foreach($allMenu as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_User']; ?></td>
                    <td><?php echo $value['emri']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['numriTel']; ?></td>
                    <td id = "menu">
                        <a href="edit_menu.php?id=<?php echo $value['ID_User']; ?>">Edit</a>
                        <a href="delete_menu.php?id=<?php echo $value['ID_User']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br><br>
            <table class= "content-table1">
                <caption>MOST POPULAR WATCHES</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Brendi</th>
                    <th>Pershkrimi</th>
                    <th>Cmimi</th>
                    <td class = "menu11">
                        <a href="create_foto1.php">Create</a>
                    </td>
                </tr>
                <?php 
                    $controller = new Produktet;
                    $read = $controller->readData();
                    foreach($read as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_produkti']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td><?php echo $value['brendi']; ?></td>
                    <td><?php echo $value['pershkrimi']; ?></td>
                    <td><?php echo $value['cmimiPaZbritje']; ?></td>
                    <td id ="menu1">
                        <a href="edit_foto1.php?id=<?php echo $value['ID_produkti']; ?>">Edit</a>
                        <a href="delete_foto1.php?id=<?php echo $value['ID_produkti']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <table>
                <caption>PRODUCTS ON SALE</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Brendi</th>
                    <th>Cmimi Pare</th>
                    <th>Cmimi Dyte</th>
                    <td class = "menu11">
                        <a href="create_foto2.php">Create</a>
                    </td>
                </tr>
                <?php 
                    $controller3 = new Produktet;
                    $r = $controller3->readData1();
                    foreach($r as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_produkti']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td><?php echo $value['brendi']; ?></td>
                    <td><?php echo $value['cmimiPaZbritje']; ?></td>
                    <td><p><?php echo $value['cmimiMeZbritje']; ?></p></td>
                    <td id = "menu2">
                        <a href="edit_foto2.php?id=<?php echo $value['ID_produkti']; ?>">Edit</a>
                        <a href="delete_foto2.php?id=<?php echo $value['ID_produkti']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <table>
                <caption>CONTACT FORM</caption>
                <tr>
                    <th>ID</th>
                    <th>Emri</th>
                    <th>Email</th>
                    <th>Mesazhi</th>
                    <td class = "menu11">
                        <a href="../contact.php">Create</a>
                    </td>
                </tr>
                <?php
                    $controller4 = new Controller4;
                    $contact = $controller4->readData();
                    foreach($contact as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_contact']; ?></td>
                    <td><?php echo $value['emri']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['mesazhi']; ?></td>
                    <td id = "menu3">
                        <a href="edit_contact.php?id=<?php echo $value['ID_contact']; ?>">Edit</a>
                        <a href="delete_contact.php?id=<?php echo $value['ID_contact']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <table>
                <caption>SLIDESHOW 1</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Brendi</th>
                    <th>Pershkrimi</th>
                    <td class = menu11>
                        <a href="create_slideshow1.php">Create</a>
                    </td>
                </tr>
                <?php
                    $slideshow1 = new Produktet;
                    $ss = $slideshow1->readDataS1();
                    foreach($ss as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_produkti']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td><?php echo $value['brendi']; ?></td>
                    <td><?php echo $value['pershkrimi']; ?></td>
                    <td id = menu4>
                        <a href="edit_slideshow1.php?id=<?php echo $value['ID_produkti']; ?>">Edit</a>
                        <a href="delete_slideshow1.php?id=<?php echo $value['ID_produkti']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

            <table>
                <caption>FEATURED PRODUCTS</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Brendi</th>
                    <th>Cmimi Me Zbritje</th>
                    <th>Cmimi Pa Zbritje</th>
                    <th>Zbritja</th>
                    <td class = "menu11">
                        <a href="create_swiper1.php">Create</a>
                    </td>
                </tr>
                <?php
                    $swiper1 = new Produktet;
                    $sw1 = $swiper1->readDataSw1();
                    foreach($sw1 as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_produkti']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td><?php echo $value['brendi']; ?></td>
                    <td><?php echo $value['cmimiMeZbritje']; ?></td>
                    <td><?php echo $value['cmimiPaZbritje']; ?></td>
                    <td><?php echo $value['zbritja']; ?></td>
                    <td id = "menu5">
                        <a href="edit_swiper1.php?id=<?php echo $value['ID_produkti']; ?>">Edit</a>
                        <a href="delete_swiper1.php?id=<?php echo $value['ID_produkti']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <table>
                <caption>GALLERY</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <td class = "menu11">
                        <a href="create_gallery.php">Create</a>
                    </td>
                </tr>
                <?php
                    $gallery = new Produktet;
                    $g1 = $gallery->readDataG();
                    foreach($g1 as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_produkti']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td id = "menu6">
                        <a href="edit_gallery.php?id=<?php echo $value['ID_produkti']; ?>">Edit</a>
                        <a href="delete_gallery.php?id=<?php echo $value['ID_produkti']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <table>
                <caption>BEST SELLERS</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Brendi</th>
                    <th>Cmimi</th>
                    <td class = "menu11">
                        <a href="create_bestS.php">Create</a>
                    </td>
                </tr>
                <?php
                    $bs = new Produktet;
                    $bestS = $bs->readDataBS();
                    foreach($bestS as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_produkti']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td><?php echo $value['brendi']; ?></td>
                    <td><?php echo $value['cmimiPaZbritje']; ?></td>
                    <td id = "menu7">
                        <a href="edit_bestS.php?id=<?php echo $value['ID_produkti']; ?>">Edit</a>
                        <a href="delete_bestS.php?id=<?php echo $value['ID_produkti']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <table>
                <caption>NEW ARRIVALS</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Brendi</th>
                    <th>Cmimi Me Zbritje</th>
                    <th>Cmimi Pa Zbritje</th>
                    <td class = "menu11">
                        <a href="create_NA.php">Create</a>
                    </td>
                </tr>
                <?php
                    $na = new Produktet;
                    $newA = $na->readDataNA();
                    foreach($newA as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_produkti']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td><?php echo $value['brendi']; ?></td>
                    <td><?php echo $value['cmimiMeZbritje']; ?></td>
                    <td><?php echo $value['cmimiPaZbritje']; ?></td>
                    <td id = "menu8">
                        <a href="edit_NA.php?id=<?php echo $value['ID_produkti']; ?>">Edit</a>
                        <a href="delete_NA.php?id=<?php echo $value['ID_produkti']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <table>
                <caption>DAILY BLOGS</caption>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Titulli</th>
                    <th>Pershkrimi</th>
                    <th>User</th>
                    <th>Data</th>
                    <td class = "menu11">
                        <a href="create_blog.php">Create</a>
                    </td>
                </tr>
                <?php
                    $blog = new Blog;
                    $blog1 = $blog->readData();
                    foreach($blog1 as $value):
                ?>
                <tr>
                    <td><?php echo $value['ID_blog']; ?></td>
                    <td><?php echo $value['foto']; ?></td>
                    <td><?php echo $value['titulli']; ?></td>
                    <td><?php echo $value['pershkrimi']; ?></td>
                    <td><?php echo $value['user']; ?></td>
                    <td><?php echo $value['data']; ?></td>
                    <td id = "menu9">
                        <a href="edit_blog.php?id=<?php echo $value['ID_blog']; ?>">Edit</a>
                        <a href="delete_blog.php?id=<?php echo $value['ID_blog']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php
    } ?>

<script>

    window.onscroll = function() {
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    }

    let searchForm = document.querySelector('.search-form');

    document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    };



    let navbar = document.querySelector('.navbar');

    document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    }

    document.querySelector('#close-navbar').onclick = () =>{
    navbar.classList.remove('active');
    }

    
</script>
</body>
</html>