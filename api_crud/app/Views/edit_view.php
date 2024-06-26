<!DOCTYPE html>
<html>
<head>
    <title>Edit Codeigniter 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container {
            max-width: 500px;
        }
        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>
<body>
   <div class="container mt-5">
    <form method="post" id="update_profile" name="update_profile" action="<?= site_url('/update') ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $profile_obj['id']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $profile_obj['name']; ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $profile_obj['email']; ?>">
        </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="text" name="photo" class="form-control" value="<?php echo $profile_obj['photo']; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block">Save Data</button>
        </div>
</form>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script> 
   <script>
        if ($("update_profile").length > 0) {
            $("#update_profile").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        maxlength: 60,
                        email: true,
                    },
                    photo: {
                        required: true,
                        maxlength: 100,
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Name is required.",
                    },
                    email: {
                        required: "Email is required.",
                        email: "It does not seem to be a valid email. ",
                        maxlength: "The email should be our equal to 60 chars",
                    },
                    photo: {
                        required: "Email is required.",
                        maxlength: "The email should be our equal to 60 chars",
                    },
                },
            })
        }
    </script>
</body>
</html>