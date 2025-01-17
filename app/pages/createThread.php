<?php
include_once("../database/connect.php");
include("../../app/functions/thread_add.php");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Thread</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <?php include("../../app/parts/header.php") ?>
    <?php include("../../app/parts/validation.php") ?>

    <div style="padding-left: 36px; color: white;">
        <h2 style="margin-top: 20px; margin-bottom: 0;">Create New Thread</h2>
    </div>
    <form method="POST" class="formWrapper">
        <div>
            <div>
                <label style="color: white;">Thread name</label>
                <input type="text" name="title">
            </div>
            <br>
            <div>
                <label style="color: white;">Your name</label>
                <input type="text" name="username">
            </div>
        </div>
        <br>
        <div>
            <div style="color: white;">
                <label>First comment</label>
            </div>
            <textarea name="body" class="commentTextArea"></textarea>
        </div>
        <input type="submit" value="Create" name="threadSubmitButton">
        <button><a href="../../index.php">Back</a></button>
    </form>
</body>

</html>