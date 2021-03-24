<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="CtlLivro.php" method="post">
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" name="titulo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Autor</label>
                    <select name="autor" id="" class="form-control">
                        <option value="Autor 1">Autor 1</option>
                        <option value="Autor 2">Autor 2</option>
                        <option value="Autor 3">Autor 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Editora</label>
                    <select name="editora" id="" class="form-control">
                        <option value="Editora 1">Editora 1</option>
                        <option value="Editora 2">Editora 2</option>
                        <option value="Editora 3">Editora 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Descrição</label>
                    <textarea name="descricao" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Qtde de Exemplares</label>
                    <input type="text" name="qtdExemplares" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </body>
</html>