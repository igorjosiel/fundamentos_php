<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
</head>
<body>
    <?php
        $nome = "Igor";
        $saudacao = "Olá";
        $titulo = $saudacao . " Portifólio do " . $nome;
        $subtitulo = "Seja bem vindo ao meu portifólio!";
        $ano = 2020;

        $projeto = "Meu Portifólio";
        $finalizado = false;
        $dataProjeto = "2024-10-11";
        $descricao = "Meu primeiro portifólio. Escrito em PHP e HTML.";

        $projetos = [
            [
                "titulo" => "Meu Portifólio",
                "finalizado" => false,
                "data" => "2024-10-05",
                "descricao" => "Meu primeiro portifólio. Escrito em PHP e HTML."
            ],
            [
                "titulo" => "Lista de tarefas",
                "finalizado" => true,
                "data" => "2024-05-11",
                "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
            ],
        ];
    ?>

    <h1><?=$titulo?></h1>

    <p><?=$subtitulo?></p>
    <p><?=$ano?>

    <hr/>

    <ul>
        <?php foreach ($projetos as $projeto): ?>
            <div
                <?php if((2024 - $ano) > 2): ?>
                    style="background-color: burlywood;"
                <?php endif; ?>
            >
                <h2><?=$projeto['titulo']?></h2>

                <p><?=$projeto['descricao']?></p>
                
                <div>
                    <div><?=$projeto['data']?></div>

                    <div>Projeto:
                        <?php if(!$projeto['finalizado']): ?>
                            <span style="color: red">Não finalizado</span>
                        <?php else: ?>
                            <span style="color: green">Finalizado</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>
</body>
</html>