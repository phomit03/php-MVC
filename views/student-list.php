<?php /** @var $list array */?>     <!-- khai bao kieu array de list khong bi error-->
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Students - MVC</title>

</head>
<body>
    <h1>List Students - MVC: </h1>
    <div class="form-group" style="text-align: end; margin-right: 20px;">
        <a style="text-decoration: none; color: white;" href="?page=student-add">
            <button class="btn btn-primary" type="button">Add Student</button>
        </a>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr style="background-color: #ccc">
                <th scope="col">ID</th>
                <th scope="col">FullName</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $item): ?>  <!--error do trình duyệt-->
                <tr>
                    <td><?php echo $item->ID; ?></td>
                    <td><?php echo $item->fullname; ?></td>
                    <td><?php echo $item->email; ?></td>
                    <td><?php echo $item->age; ?></td>
                    <td>
                        <div class="form-group" >
                            <a style="text-decoration: none; color: white;" href="?page=student-edit&ID=<?php echo $item->ID ?>"> <!-- cac tham so truyen qua phuong thuc GET -->
                                <button class="btn btn-info" type="button">Edit Student</button>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <a style="text-decoration: none; color: white;"
                               onclick="return confirm('Do you want to remove this student from the list?');"
                               href="?page=student-delete&ID=<?php echo $item->ID ?>">
                                <button class="btn btn-danger" type="button">Delete Student</button>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>