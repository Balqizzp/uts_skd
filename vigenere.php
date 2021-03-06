<html>

<head>
    <title>VIGENERE CIPHER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.m
in.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0ho
P+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style type="text/css">
        body {
            background-color : #FFC0CB;
            background-size: auto;
            align-items: center;
            justify-content: center;
            display: grid;
            padding-top: 15px;
        }
    </style>
</head>
<div class="container">
    <h1>Vigenere - Enkripsi</h1>
    <hr>
    <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
        <label for="basic">Masukkan Plain Text :</label>
        <textarea class="form-control" name="plain" id="textarea-a"></textarea>
        <label for="basic">Masukkan Kunci :</label>
        <textarea class="form-control" name="kunci" id="textarea-a"></textarea><br>
        <input type="submit" class="btn btn-success" value=" Encrypt" data-theme="a">
        <input type="reset" class="btn btn-primary" value=" Hapus" data-theme="a">
    </form>
</div>

</html>