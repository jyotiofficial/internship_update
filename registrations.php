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
        <p>Registered Applicants</p>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered table-dark table-sm">
            <thead class="thead-light text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Applicant Name</th>
                    <th scope="col">Resume</th>

                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        13
                    </th>
                    <td class="pt-3" scope="row">
                        Mithilesh Ganesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        <a href="#"
                            target="_blank">Link</a>
                    </td>
                </tr>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        13
                    </th>
                    <td class="pt-3" scope="row">
                        Mithilesh Ganesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        <a href="#"
                            target="_blank">Link</a>
                    </td>
                </tr>

                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        13
                    </th>
                    <td class="pt-3" scope="row">
                        Mithilesh Ganesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        <a href="#"
                            target="_blank">Link</a>
                    </td>
                </tr>

                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        13
                    </th>
                    <td class="pt-3" scope="row">
                        Mithilesh Ganesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        <a href="#"
                            target="_blank">Link</a>
                    </td>
                </tr>

                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        13
                    </th>
                    <td class="pt-3" scope="row">
                        Mithilesh Ganesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        <a href="#"
                            target="_blank">Link</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</body>

</html>