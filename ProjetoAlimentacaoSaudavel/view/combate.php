<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <style>
        h1.logo{
            font-family: 'Indie Flower', cursive;
            text-align: center;
            color: #28a745;
        }
        a{
            font-family: 'Indie Flower', cursive;
            font-size: 25px;
        }
        h2{
            font-family: 'Indie Flower', cursive;
        }
    </style>

    <title>Alimentação Saudável</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Quem Somos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dicas.php">Dicas</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="combate.php">Combate à doenças</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="receitas.php">Receitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastrese.php">Cadastre-se</a>
            </li>
        </ul>
    </div>
</nav>

<br>
<h2 class="text-center">Alguns Alimentos que Auxiliam no Combate a Doenças</h2>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Abacate
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                Embora seja uma fruta calórica, o abacate é fonte de gordura monoinsaturada, vitamina E, vitamina C, ácido fólico, ferro, fósforo e magnésio. Esses nutrientes atuam como anti-inflamatório natural e também combatem infecções.

                Segundo Cintia Azeredo, outra importante ação do abate é o controle dos níveis de LDL e HDL colesterol. A fruta funciona também como protetora do coração, evitando assim doenças cardíacas e o acidente vascular cerebral.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Aveia
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                Rica em proteínas, a veia possui ômega 3, potássio e fibras solúveis. Ela atua limpando as artérias, controlando os níveis de colesterol e evitando doenças do coração. Além disso, a aveia melhora o funcionamento intestinal e ainda aumenta a sensação de saciedade.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Linhaça
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Também rica em ômega 3, como a aveia, a linhaça ainda possui ômega 6, fibras, gorduras mono e poli-insaturadas, magnésio, fósforo e potássio. Ela protege o coração, melhora função intestinal, controla a liberação de glicose na corrente sanguínea e aumenta a sensação de saciedade.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    Batata doce
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                A batata doce possui baixo índice glicêmico e oferece carboidrato de melhor qualidade, aquele que não eleva muito a quantidade de açúcar no sangue. Ela também é fonte de fibras, que controlam a sensação de saciedade, e de vitaminas A e C, que melhoram o sistema imunológico.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="cinco">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsoCinco" aria-expanded="false" aria-controls="collapseThree">
                    Água de Coco
                </button>
            </h5>
        </div>
        <div id="collapsoCinco" class="collapse" aria-labelledby="cinco" data-parent="#accordionExample">
            <div class="card-body">
                Segundo Cintia Azeredo, ainda não se conseguiu criar melhor suprimento de eletrólitos que a água de coco. Ela é rica em potássio, magnésio, cálcio, sódio, fósforo, vitamina C, entre outros nutrientes. Também protege contra cãibras e melhora o desempenho físico durante treinos, repondo nutrientes perdidos na transpiração.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="seis">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#colapsoSeis" aria-expanded="false" aria-controls="collapseThree">
                    Azeite de oliva virgem ou extra virgem
                </button>
            </h5>
        </div>
        <div id="colapsoSeis" class="collapse" aria-labelledby="seis" data-parent="#accordionExample">
            <div class="card-body">
                Um bom azeite pode ser rico em polifenóis e antioxidantes capazes de combater radicais livres. Ele também possui efeito protetor de diversas doenças degenerativas e auxilia no controle do colesterol.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="sete">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#colapsoSete" aria-expanded="false" aria-controls="collapseThree">
                    Castanha do Pará
                </button>
            </h5>
        </div>
        <div id="colapsoSete" class="collapse" aria-labelledby="sete" data-parent="#accordionExample">
            <div class="card-body">
                Ela é rica em selênio, vitaminas do complexo B, zinco, magnésio, gordura mono e poli-insaturadas e combate o envelhecimento celular. A castanha-do-pará ajuda na desintoxicação do organismo, melhora a memória, a imunidade e controla os níveis de colesterol.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="oito">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#colapsoOito" aria-expanded="false" aria-controls="collapseThree">
                    Vinho
                </button>
            </h5>
        </div>
        <div id="colapsoOito" class="collapse" aria-labelledby="oito" data-parent="#accordionExample">
            <div class="card-body">
                O vinho possui fonte de polifenóis e resveratrol, que são importantes para a prevenção de arterioscleose e trombose. Não exagere em tomar vinho, o ideal é uma taça de 200ml por dia. Para quem não gosta de bebida alcoólica, é recomendado tomar suco de uva integral.
            </div>
        </div>
    </div>


</div>

<footer class="position-sticky card-footer footer navbar-fixed-bottom">
    <h6 class="text-center bg-white">Alimente-se_Bem!</h6>
    <hr>
    <h6 class="text-center">INSTITUTO FEDERAL DE GOIÁS - IFG</h6>
    <h6 class="text-center bg-light">Desenvolvido por: Camilla Vanessa de Souza Bim | Profº: Renato Abreu | Ano: 2019 | Disciplina: P.I.IV</h6>
</footer>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>