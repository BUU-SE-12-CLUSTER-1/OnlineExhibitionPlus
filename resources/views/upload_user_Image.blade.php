<?php
session_start();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container">
<h1>Upload {{$oe_users['user_fname']}} Image</h1>
<?php if(isset($_SESSION["success"])){?>
    <div class="alert alert-success">
    <?php
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
        ?>
    </div>
<?php } ?>
<?php if(isset($_SESSION["error"])){?>
    <div class="alert alert-danger">
    <?php
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
        ?>
    </div>
<?php } ?>
<hr>
<form method="POST" action={{url("/upload-user-image/".$oe_users['user_id'])}} enctype="multipart/form-data">
    @csrf
    <label for="upload-image-box" id="drop-area">Upload Image</label>
    <input type="file" name="upload-image" accept="image/*" id="upload-image-box">
    <button type="submit">UPLOAD</button>
</form>
<hr>
<h3>Uploaded Image</h3>
</div>
