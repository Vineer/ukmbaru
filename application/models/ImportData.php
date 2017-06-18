<html>
    <head>
        <title>Upload CSV</title>
    </head>
    <body>
        <form method="post" action="<?=base_url()?>Admin/ImportCSV" enctype="multipart/form-data">
            <input type="file" name="userfile"><br><br>
            <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
        </form>
    </body>
</html>