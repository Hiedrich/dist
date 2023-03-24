<?php include('layout/header.php'); ?>
<style>
    .content-wrapper {
        background-color: lightslategrey;
    }

    .main-header {
        border-bottom: 3px solid #dee2e6;
        z-index: 1034;
    }

    .navbar-white {
        background-color: #1F313F;
        color: white;
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgb(255 255 255);
    }

    .small-box {
        box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2), 10px 10px 10px 10px rgba(0, 0, 0, 0.19);
    }

    .small-box>.small-box-footer {
        background-color: lightslategrey;
        color: blue;
    }

    .small-box>.inner {
        background-color: honeydew;
    }

    .content-header h1 {
        font-weight: bolder;
    }

    a {
        padding-right: 100px;
    }

    .approve-button {
        background-color: green;
        color: white;
        border-radius: 5px;
        border: 3px solid black;
        cursor: pointer;
    }

    .decline-button {
        background-color: red;
        color: white;
        border-radius: 5px;
        border: 3px solid black;
        cursor: pointer;
    }

    .icon {
        margin-right: 10px;
    }
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php include('layout/navbar.php'); ?>

        <?php include('layout/sidebar.php'); ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Students</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('layout/footer.php'); ?>
    </div>
</body>
<?php include('layout/script.php'); ?>

</html>