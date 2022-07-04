<?php /** @var $student array */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Students - Database</title>
    <style>
        .btn-primary {
            background-color: #007bff;
        }
    </style>
</head>
<body>
<h1>Edit students - Database: </h1>
<form method="post" style="width: 50%; margin:20px auto" action="?page=student-update&ID=<?php echo $student->ID; ?>">
    <div class="form-group" style="text-align: start;">
        <a style="text-decoration: none; color: white" href="/project/session03/mvc/?page=student-list">
            <button class="btn btn-primary" type="button"><< Back List</button>
        </a>
    </div>
    <div class="form-group">
        <label>ID</label>
        <input class="form-control" type="text" name="id" value="<?php echo $student->ID; ?>" placeholder="AUTO_INCREMENT ID" disabled/>
    </div>
    <div class="form-group">
        <label>FullName *</label>
        <input required class="form-control" type="text" name="fullname" value="<?php echo $student->fullname; ?>" />
    </div>
    <div class="form-group">
        <label>Email *</label>
        <input required class="form-control" type="email" name="email" value="<?php echo $student->email; ?>" />
    </div>
    <div class="form-group">
        <label>Age *</label>
        <input required class="form-control" type="text" name="age" value="<?php echo $student->age; ?>"/>
    </div>
    <div class="form-group" style="text-align: center;">
        <input class="btn btn-primary" type="submit" value="Update Student"/>
    </div>
</form>
</body>
</html>

