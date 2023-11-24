<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center text-success">Look for your favorite book!</h1>
    <div class="container">
        <form action="" method="POST">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" name="title">
            <label for="">Edition</label>
            <input type="text" class="form-control" id="" name="edition">
            <label for="">Author</label>
            <input type="text" class="form-control" id="" name="author">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" name="description">
            <label for="">Select Category</label>
            <select name="category" id="" class="form-control">
                <option value="-">-</option>
                <option value="adventure">Aventuras</option>
                <option value="horror">Terror</option>
                <option value="fiction">Ficcion</option>
                <option value="programming">Programacion</option>
            </select>
            <label for="">Age</label>
            <input type="number" class="form-control" name="age">
            <input type="submit" class="btn btn-dark mt-4" value="Ingresar Libro">
        </form>
    </div>
    <?php
        require "./clases/Libro.php";
        $title_form = @$_POST['title'];
        $edition_form = @$_POST['edition'];
        $auhtor_form = @$_POST['author'];
        $description_form = @$_POST['description'];
        $category_form = @$_POST['category'];
        $age_form = @$_POST['age'];

        $libro = new Libro($title_form, $edition_form, $auhtor_form, $description_form, $category_form);

        $libro->printInfo();
        
        $libro->verifyCategory();

        $libro->verifyAgeByCategory($age_form);


    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>