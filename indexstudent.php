<?php
$title = "Dashboard";
$style = "./index.css";
$favicon = "../../assets/favicon.ico";
include_once("C:/xampp/htdocs/InternshipPortal/components/head.php");
include_once("C:/xampp/htdocs/InternshipPortal/connect/connect.php");

// Establish a database connection
$host = "localhost"; // Replace 'localhost' with your MySQL host
$username = "root"; // Replace 'username' with your MySQL username
$password = ""; // Replace 'password' with your MySQL password
$database = "student"; // Replace 'database' with your MySQL database name

$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$sql = "SELECT announcement_title, description, skills_required, location, start_date, duration, branch, work_type, stipend_type, stipend, work_location, perks FROM new_annoucement";

// Perform the query using the $conn variable
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Process the results
    $row = mysqli_fetch_assoc($result);
} else {
    // Handle the query error
    echo "Error: " . mysqli_error($conn);
}

include_once("C:/xampp/htdocs/InternshipPortal/components/head.php");
?>

<div class="container my-2 greet">
    <p>Apply for Internship</p>
</div>
<div class="container my-3 text-justify" id="content">
    <div class="bg-light p-5 rounded">
        <p class="h3 "><?php echo $row["announcement_title"]; ?></p>
        <br>
        <p class="lead">
            <?php echo $row["description"]; ?>
        </p>
        <br>
        <div>
            <p class="h5">
                Duration
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["duration"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Start Date
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["start_date"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Skills Required
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["skills_required"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Open for Branches
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["branch"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Location
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["location"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Work Type
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["work_type"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Work Location
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["work_location"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Stipend Type
            </p>
            <p class="lead">
                <small>
                    <?php echo $row["stipend_type"]; ?>
                </small>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Stipend
            </p>
            <p class="lead">
                &#x20b9;
                <strong>
                    <?php echo $row["stipend"]; ?>
                </strong>
                <strong>/ Month</strong>
            </p>
        </div>
        <br>
        <div>
            <p class="h5">
                Perks
            </p>
            <p class="lead text-muted">
                <small>
                    <b>
                        <?php echo $row["perks"]; ?>
                    </b>
                </small>
            </p>
        </div>
        <br>
        <div class="col d-flex align-items-center justify-content-center">
            <a href="../staff/edit.php" class="btn btn-warning btn-lg col col-lg-2 col-md-4 col-sm-6 d-flex align-items-center justify-content-evenly" role="button" aria-disabled="true">
                <div>
                    Edit
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                </svg>
            </a>
        </div>
        <br>
        <div class="col d-flex align-items-center justify-content-center">
            <a href="https://script.google.com/macros/s/AKfycbwCo_BC67YzTTyEOhTLdxsPzREN2q-YoZiKe_SjxrMIDXIa6Vh1RQW5XnlMYlvQUSM/exec" class="btn btn-primary btn-lg col col-lg-3 col-md-4 col-sm-6 d-flex align-items-center justify-content-evenly" role="button" aria-disabled="true">
                <div>
                    Apply Now
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                </svg>
            </a>
        </div>
        <br>
        <div class="col d-flex align-items-center justify-content-center">
            <button disabled class="btn btn-secondary btn-lg col col-lg-3 col-md-4 col-sm-6 d-flex align-items-center justify-content-evenly" role="button" aria-disabled="true">
                <div>
                    Applied
                </div>
            </button>
        </div>
    </div>
</div>

</body>

</html>
