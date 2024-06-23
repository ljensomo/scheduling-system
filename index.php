<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- includes css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" class="rel">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- custom css -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- includes scripts -->
    <script src="jquery-3.7.1/jquery-3.7.1.min.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src='fullcalendar/index.global.min.js'></script>

    <!-- custom scripts -->
    <script src="js/index.js"></script>

    <title>Scheduling System</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row g-2">
            <div class="col-12">
                <div class="p-3 border bg-light">
                    <div class="row">
                        <div class="col"><h3>Scheduling System</h3></div>
                        <div class="col">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Good Day John Doe!</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="p-3 border bg-light" id="right-div">
                    <button type="button" id="btn-create-event" class="btn btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#calendar-modal">+ Create Event</button>
                </div>
                <div class="p-3 border bg-light" id="right-div">
                    <div class="row">
                        <div class="col-6">
                            <h5>Categories</h5>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-target="#category-modal" data-bs-toggle="modal">+ Add</button>
                        </div>
                    </div>
                    <hr>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="display:flex;"><div id="category-color-div"></div>&nbsp;&nbsp;Personal Tasks</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-warning"><i class="bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-9">
                <div class="p-3 border bg-light" id='calendar'></div>
            </div>
        </div>
    </div>

    <?php include_once 'modals/index-modals.html'; ?>
</body>
</html>