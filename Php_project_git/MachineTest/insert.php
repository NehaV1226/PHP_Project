<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <style>
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>

</head>

<body style="background-image: url(data:image/jpeg;base64,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);
background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;">
    <header>
        <nav
            class="navbar navbar-expand-sm navbar-light"
            style="background-color: #cdb4db">
            <div class="container">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqP6uZCJoWUTdyGB0LG6XGY8Y50kNzTf-xQg&s"
                    alt=""
                    class="img-fluid rounded-circle"
                    height="55px"
                    width="55px" />
                <a class="navbar-brand py-3" href="#" style="color: blueviolet">Evanesce</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle active"
                                href="#"
                                id="dropdownId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">Employee</a>
                            <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownId"
                                style="background-color: #ffd6ff45">
                                <a class="dropdown-item" href="insert.php">Add Details</a>
                                <a class="dropdown-item" href="delete.php">Remove Profile</a>
                                <a class="dropdown-item" href="update.php">Update Details</a>
                                <a class="dropdown-item" href="show.php">Show Info</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0" action="logout.php">
                        <input
                            class="form-control me-sm-2"
                            type="text"
                            placeholder="Search" />
                        <button
                            class="btn btn-outline-dark my-2 my-sm-0"
                            type="submit"
                            style="background-color: rgba(137, 43, 226, 0.415)">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div
            class="container col-md-7 mb-4 mt-3">
            <div
                class="row justify-content-center align-items-center g-2 p-5">
                <div class="col">
                    <div class="card" style="background-color:rgba(205, 180, 219, 0.35);">
                        <div class="card-body">
                            <form action="" method="post">
                                <center>
                                    <h4 class="card-title">Add Details</h4>
                                </center>
                                <div class="form-floating mb-3">
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="id"
                                        id="formId1"
                                        placeholder=""
                                        required />
                                    <label for="formId1">Id</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="formId1"
                                        placeholder=""
                                        required />
                                    <label for="formId1">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="age"
                                        id="formId1"
                                        placeholder=""
                                        required />
                                    <label for="formId1">Age</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-dark">Add</button>
                                    <button type="reset" class="btn btn-outline-dark">Reset</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="text-center">
                        <?php
                        include 'db.php';

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $age = $_POST['age'];

                            $stmt = $conn->prepare("insert into empinfo(Id, Name, Age) values (?,?,?)");
                            $stmt->bind_param("iss", $id, $name, $age);
                            if ($stmt->execute()) {
                                echo "Data Inserted";
                            } else {
                                echo "Error" . $stmt->error;
                            }
                            $stmt->close();
                            $conn->close();
                        }

                        ?>

                    </div>
                </div>

            </div>

        </div>

    </main>
    <footer
        class="text-center p-2"
        style="height: 40px; background-color: #cdb4db"
        ,>
        <blockquote>&copy; All Rights Reserved</blockquote>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>