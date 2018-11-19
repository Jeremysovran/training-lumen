<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/training/traning-lumen/public/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link rel="stylesheet" href="/training/traning-lumen/public/assets/css/styles.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projet training</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row topBar pt-2 pb-2 d-lg-none">
                <div class="col-3"><i class="fas fa-arrow-left"></i></div>
                <div class="col-9"><?= $users->name ?></div>
                
            </div>
            <div class="row topBar p-2 d-none d-lg-flex justify-content-between topFixed">
            <div class=""><?= $users->name ?></div>
            <div><a href="" class="text-light">deconnexion</a></div>
            </div>
        </div>
    </header>