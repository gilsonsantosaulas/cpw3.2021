<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="CtlProduto.php" method="post">
                
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                
               <div class="form-group">
                    <label for="">Descrição</label>
                    <textarea name="descricao" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Preço</label>
                    <input type="text" name="preco" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </body>
</html>