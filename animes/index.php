<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
    <title>Animes BR</title>
</head>

<body>
    <main>

        <section id="pagina-home">
            <header>
                <img src="/imagens/logo.png" class="logo">
                <nav class="menu-pincipal">
                    <ul>
                        <li><a href="marianepascon18@gmail.com" class="link-ativo"> Contato</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>Aventura e ação</h1>
                <div>
                    <a href="#" class="btn">ASSISTIR AO VIDEO</a>
                    <a href="#" class="btn">Leia mais sobre o assunto</a>

            </main>
        </section>
        <section id="pagina-cadrasto">
            <div class="cadastro">
                <div class="col-12 col-sm2 col-md-6 col-lg-6 mt-2">
                    <div class="card" style="height:100%">
                        <img class="card-img-top" src="imagens/fundo2.png" alt="Anime">
                        <form action="anime-salvar.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Titulo do
                                        anime:</label>
                                    <input type="text" class="form-control" name="titulo" id="exampleInputEmail1"
                                        aria-describedby="Nome do anime">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                                    <input type="text" class="form-control" name="categoria" id="exampleInputEmail1"
                                        aria-describedby="categoria de anime">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Quantifdade de
                                        episodios</label>
                                    <input type="number" class="form-control" name="qtd" id="exampleInputEmail1"
                                        aria-describedby="Qauntidade total de episodios">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                </div>

                        </form>
                    </div>
                </div>

        </section>
    </main>

</body>

</html>