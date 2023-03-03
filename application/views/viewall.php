<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.13.3/datatables.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body>
    <div style="width: 80%; margin:auto;">
        <div style="margin:auto; float:right; padding:1rem">
            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/create" role="button">Add new</a>
        </div>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($item as $list) { ?>
                    <tr>
                        <td><?php echo $list->name; ?></td>
                        <td><?php echo $list->address; ?></td>
                        <td><?php echo $list->email; ?></td>
                        <td><?php echo $list->phone; ?></td>
                        <td><a href="<?php echo base_url(); ?>index.php/main/edit/<?php echo $list->student_id; ?>"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button></a>
                            | <a href="<?php echo base_url(); ?>index.php/main/delete/<?php echo $list->student_id; ?>"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<script src="https://cdn.datatables.net/v/dt/dt-1.13.3/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</html>