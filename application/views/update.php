<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <form action="<?php echo base_url(); ?>index.php/main/updatedata" method="post">
        <div style="width:80%; margin:auto; padding: 10px;">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="student_id" id="student_id" value="<?php echo $item[0]->student_id; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $item[0]->name; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tel</label>
                <input type="tel" class="form-control" name="tel" id="tel" value="<?php echo $item[0]->phone; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $item[0]->email; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <input class="form-control" type="text" name="address" id="address" value="<?php echo $item[0]->address; ?>"></input>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Save changes</button>
            </div>
        </div>
    </form>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>