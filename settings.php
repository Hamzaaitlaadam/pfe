<?php
include 'sidebar.php';
include 'head.php';
include 'dbcon.php';
include('cryptfunction.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/settings.css">

    <title>Settings</title>
</head>

<body>
    <div class="container ">
        <div class="title">
            <h1>Paramètrs</h1>
        </div>

        <div class="blocks">


            <div class="card">
                <div class="image">
                    <img src="images/qr.png" alt="">
                </div>
                <div class="info">
                    <h3>QR Code</h3>

                    <h4><?php echo (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `qr_code`"))); ?></h4>
                </div>
                <button class="btn_card" id="qr_btn">
                    Cree Un Qr Code
                </button>
            </div>


            <div class="card">
                <div class="image">
                    <img src="images/user.png" alt="">
                </div>
                <div class="info">
                    <h3>Admins</h3>
                    <h4><?php echo (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `admins`"))); ?></h4>
                </div>
                <button class="btn_card" id="user_btn">
                    Tout Admins
                </button>
            </div>

        </div>





    </div>

    <div class="qr_generator">

        <div class="xmarks xmarks1">
            <img src="images/cross.png" alt="">
        </div>
        <div class="wrapper">
            <header>
                <h1>QR Code Generator</h1>
                <p>Enter le numéro du table pour cree le code QR</p>
            </header>
            <form id="form_qr" class="form" method="post" action="ajouter_qr.php">


                <div class="inpqr">
                    <input class="input" placeholder="Tapez le numéro du table" required="" type="text" name="qrid">
                </div>

                <input type="hidden" id="qrsrc" value="" name="qrtext">


                <button class="button" id="btn_qr" type="submit" name="qrbutton"> Generate QR Code </button>

            </form>
        </div>

        <div class="qr_table">
            <table>
                <thead class="thead">
                    <td>Code</td>
                    <td colspan="3">Nombre du Table</td>
                </thead>



                <tbody>

                    <?php
                    $select_qr = "SELECT `id_table`, `qr_img` FROM `qr_code`";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $select_qr)) {
                        echo "sql failed";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                    }

                    while ($row_qr = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr class="tr_qr">

                            <td> <img class="imgqr" src="<?php echo ($row_qr['qr_img']); ?>" alt=""> </td>
                            <td><?php echo ($row_qr['id_table']); ?></td>
                            <td class="del"><a href="delete_qr.php?id=<?= encryptId($row_qr['id_table']) ?>"><img class="dellimg" src="images/delete.png" alt=""></a></td>
                            <td class="del"><a href="images/pizza home.png" download><img class="dellimg" src="images/file.png" alt=""></a></td>

                        </tr>

                    <?php } ?>

                </tbody>



            </table>

        </div>
    </div>




    <div class="users">

        <div class="cont">

            <div class="xmarks xmarks2">
                <img src="images/cross.png" alt="">
            </div>
            <div class="user_table">
                <table>
                    <thead class="thead">
                        <td>id</td>
                        <td>nom</td>
                        <td>email</td>
                        <td colspan="2">Action</td>
                    </thead>
                    <?php
                    $select_admin = "SELECT * FROM `admins`";


                    if (!mysqli_stmt_prepare($stmt, $select_admin)) {
                        echo "sql failed";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                    }

                    while ($row_admin = mysqli_fetch_assoc($result)) {
                    ?>

                        <tr class="tr">
                            <td><?php echo ($row_admin['id']) ?></td>
                            <td><?php echo ($row_admin['user_name']) ?></td>
                            <td><?php echo ($row_admin['email']) ?></td>
                            <td><a href="delete_admin.php?id=<?php echo (encryptId($row_admin['id'])) ?>"><lord-icon src="https://cdn.lordicon.com/kfzfxczd.json" trigger="morph" colors="primary:#000000" state="morph-fill" style="width:27px;height:27px"></lord-icon></a></td>
                            <td><a href=""><img src="images/edit (1).png" alt=""></a></td>
                        </tr>

                    <?php } ?>


                </table>
            </div>


            <div class="user_form" id="user_form">

                <div class="title">
                    <h3>Ajouter nouveau Admin</h3>
                    <img src="images/user.png" alt="" />
                </div>


                <div class="line"></div>

                <form action="add_admin.php" method="post" enctype="multipart/form-data">
                    <div class="inputs_text">
                        <div class="inputGroup">
                            <input type="text" required="" autocomplete="off" class="text_inpute" name="name" />
                            <label for="name">Username</label>
                        </div>

                        <div class="inputGroup">
                            <input type="email" required="" autocomplete="off" class="text_inpute" name="email" />
                            <label for="name">email</label>
                        </div>

                        <div class="passwords">
                            <div class="inputGroup">
                                <input type="password" required="" autocomplete="off" class="text_inpute" name="password" />
                                <label for="name">Mot de pass</label>
                            </div>

                            <div class="inputGroup">
                                <input type="password" required="" autocomplete="off" class="text_inpute" name="R_password" />
                                <label for="name"> Repeter Mot de pass</label>
                            </div>
                        </div>

                        <label for="file_uplo" class="file_lab">
                            <input id="file_uplo" type="file" name="pic" />
                            <img src="images/file.png" alt="" />
                            Uplod the Picture
                        </label>
                    </div>

                    <div class="buttons">
                        <button class="frm_btn" id="exit_userf" type="reset">Quitter</button>
                        <button class="frm_btn" type="submit">Ajouter</button>
                    </div>
                </form>


            </div>




            <button class="tooltip" id="tooltip">
                <ion-icon name="add"></ion-icon>
                <span class="tooltiptext">Ajouter</span>
            </button>
        </div>
    </div>

    </div>













    <script>
        const wrapper = document.querySelector(".wrapper"),
            qrInput = wrapper.querySelector(".form input");

        const qrImg = document.getElementById("qrsrc");


        const generateBtn = document.getElementById("btn_qr");


        let preValue;

        generateBtn.addEventListener("click", () => {
            let qrValue = qrInput.value.trim();
            if (!qrValue || preValue === qrValue) return;

            preValue = 'http://localhost/PFE/menu.php?table=' + qrValue;
            generateBtn.innerText = "Generating QR Code...";
            qrImg.value = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${preValue}`;

        });

        qrInput.addEventListener("keyup", () => {
            if (!qrInput.value.trim()) {
                wrapper.classList.remove("active");
                preValue = "";
            }
        });
    </script>



















    <script>
        const qr_btn = document.getElementById("qr_btn");
        const qr_generator = document.querySelector(".qr_generator");
        const xmarks1 = document.querySelector(".xmarks1");

        qr_generator.style.top = "-100%";

        if (sessionStorage.getItem("qr") === "false") {
            sessionStorage.setItem("qr", false);
        }

        const qrClick = () => {

            if (qr_generator.style.top === "-100%") {
                sessionStorage.setItem("qr", true);
                qr_generator.style.top = "0%";
            }

        }

        qr_btn.addEventListener("click", qrClick);

        if (sessionStorage.getItem("qr") === "true") {
            qr_generator.style.top = "0%";
        }





        xmarks1.onclick = function() {
            if (qr_generator.style.top === "0%") {
                qr_generator.style.top = "-100%";
                sessionStorage.setItem("qr", false);
            }
        }
    </script>










    <script>
        const user_btn = document.getElementById("user_btn");

        const users = document.querySelector(".users");
        const xmarks2 = document.querySelector(".xmarks2");

        users.style.top = "-100%";

        if (sessionStorage.getItem("user") === "false") {
            sessionStorage.setItem("user", false);
        }

        user_btn.onclick = function() {

            if (users.style.top === "-100%") {
                users.style.top = "0%";
                sessionStorage.setItem("user", true);
            }

        };

        if (sessionStorage.getItem("user") === "true") {
            users.style.top = "0%";
        }


        xmarks2.onclick = function() {
            if (users.style.top === "0%") {
                users.style.top = "-100%";
                user_form.style.marginRight = "-100%";
                sessionStorage.setItem("user", false);

            }
        };










        const tooltip = document.getElementById("tooltip");
        const user_form = document.getElementById("user_form");



        user_form.style.marginRight = "-100%";

        tooltip.onclick = function() {

            if (user_form.style.marginRight === "-100%") {
                user_form.style.marginRight = "0%";
            } else {
                user_form.style.marginRight = "-100%";
            }
        };

        document.getElementById("exit_userf").onclick = function() {
            if (user_form.style.marginRight === "0%") {
                user_form.style.marginRight = "-100%";
            }
        }








        document.addEventListener("keydown", e => {

            if (e.key.toLowerCase() === "x" && e.ctrlKey) {

                if (qr_generator.style.top === "0%") {
                    qr_generator.style.top = "-100%";
                    sessionStorage.setItem("qr", false);
                }


                if (users.style.top === "0%") {

                    if (user_form.style.marginRight === "0%") {
                        user_form.style.marginRight = "-100%"
                    } else {
                        users.style.top = "-100%";
                        sessionStorage.setItem("user", false);
                    }
                }
            }
        });


        document.addEventListener("keydown", e => {

            if (e.key.toLowerCase() === "p") {

                if (user_form.style.marginRight === "-100%") {
                    user_form.style.marginRight = "0%";
                }
            }
        });
    </script>


















    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>




</body>

</html>