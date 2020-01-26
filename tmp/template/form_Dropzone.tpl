<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

<form method="post" style="margin-left: 15%">
    <label for="NumberCircuit">ID Circuit</label><br>
    <input style="text-align:center;width: 100px" value="{$idNumeroC}" type="number" id="idNumeroC" name="idNumeroC"><br><br> <div class="form-group">
        <button type="submit" class="btn btn-primary" id="submitBtn" name="submitN">Changer ID</button>
    </div>
</form>
<div class="container">
    <form action="upload.php" class="dropzone" id="dropzoneFrom">
    </form>
    <br />
    <br />
    <div align="center">
        <button type="button" class="btn btn-info" id="submit-all">Upload</button>
    </div>
    <br />
    <br />
    <div id="preview"></div>
    <br />
    <br />
</div>
