<?php
$title = "Dashboard";
$style = "./styles/global.css";
$favicon = "../../assets/favicon.ico";
include_once("../../components/head.php");
?>

<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>
    <div class="container my-2 greet">
        <p>Previous Applications</p>
        <!-- Search Button -->
        <form class="row g-3">
            <div class="col-auto">
                <input class="form-control" id="search" placeholder="ID or Company Name">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Search</button>
            </div>
        </form>
    </div>
    <div class="container mt-2">
        <table class="table table-bordered table-dark table-sm">
            <thead class="thead-light text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">View/Edit</th>
                    <th scope="col">Title</th>
                    <th scope="col">Published On</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operation</th>
                    <th scope="col">Registrations</th>
                    <th scope="col">Download</th>

                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th class="pt-3 text-center text-danger" scope="row">
                        14
                    </th>
                    <td class="py-3 text-center ">
                        <div class="d-flex justify-content-center align-items-center">

                            <a href="../Internship/" class="btn btn-primary" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </a>
                        </div>

                    </td>
                    <td class="pt-3 ">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <th class="pt-3 text-center text-success">
                        Active
                    </th>
                    <td class="py-3 text-center ">
                        <div class="d-flex justify-content-center align-items-center">

                            <button class="btn btn-success" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </button>

                        </div>

                    </td>
                    <td class="py-3 text-center ">
                        <div class="d-flex justify-content-center align-items-center">

                            <a href="./registrations.php" target="_blank" class="btn btn-warning" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                                </svg>
                            </a>
                        </div>

                    </td>



                    <td class="py-3 text-center ">
                        <div class="d-flex justify-content-center align-items-center">

                            <a href="../../Libraries/excel/process.php" class="btn btn-primary" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                            </a>
                        </div>

                    </td>

                </tr>

            </tbody>
        </table>
    </div>
</body>

    <head>
        <title>pagination</title>
        <style type="text/css">
            .firstpaging{
                border: 1px solid black;
                padding: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
         }
         a{
                text-decoration: none ;
                background-color: white;
                padding: 10px;
                color: black;
         }
            a.sec:hover{
                background-color: #0d6efd;
                color: white;


            }
        </style>


    </head>
    <body>
        <?php
            include_once("../../components/navbar/index.php");
        ?>

        <div class="firstpaging">
        <a href=""class="sec"><< Previous</a>
        <a href="" class="sec">1</a>
        <a href="" class="sec">2</a>
        <a href="" class="sec">3</a>
        <a href="" class="sec">4</a>
        <a href="" class="sec">5</a>
        <a href=""class="sec">Next >></a>
        </div>    
    </body>
</html>