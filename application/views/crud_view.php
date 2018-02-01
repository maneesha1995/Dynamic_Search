<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auto Complete Search</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style type="text/css">
        body{
            font-family: 'Lato', sans-serif;
            margin: 0;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class='container'>

<h1 class="heading" style="margin-top: 50px;">Dynamic Search</h1>

<div class="col-md-6" style="margin-top: 30px; ">

    <?php echo form_open('Crud/addStudent'); ?>
        <div class="form-group">
            <label for="regno">Name</label>
            <select class="form-control" name="name" id="name">
                <option value="">Select a Name</option>
                <?php foreach ($names as $value):?>
                    <option value="<?php echo $value->ID;?>"><?php echo $value->UserName;?></option>
                <?php endforeach ;?>
            </select>
        </div>


</div>

<div class="col-md-6" style="margin-top: 60px; ">


</div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#name').on('change',function () {
               var UserName= $(this).val();
               alert(UserName);
            });
        })
    </script>
</body>
</html>
