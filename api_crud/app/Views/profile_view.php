<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.js">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#profiles-list').DataTable();
    }
    );
</script>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-end">
        </div>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        }
        ?>
    <div class="mt-3">
        <table class="table table-bordered" id="profiles-list">
            <thead>
                <tr>
                    <th>profile_Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($profiles):  ?>
                <?php foreach($profiles as $profiles): ?>
                <tr>
                    <td><?php echo $profiles['id']; ?></td>
                    <td><?php echo $profiles['name']; ?></td>
                    <td><?php echo $profiles['email']; ?></td>
                    <td><?php echo $profiles['photo']; ?></td>
                    <td>
                        <a href="<?php echo base_url('edit-view/'. $profile·['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?php echo base_url('delete/'. $profile·['id']); ?>" class="btn btn-primary btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

    </div>    
    </div>

</body>
</html>