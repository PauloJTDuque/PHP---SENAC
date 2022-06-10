<?php include "header.php"  ?>
<div class="container-fluid">
    <div class="row">
<div class="col-md-12">
    <br>
    <h3 id="h1principal">Aula 1 - Introdução</h3>
    <h4 id="h2center">PHP - PHP: Hypertext Preprocessor</h4>
    <br>
    <a href="index.php" target="_self"><button class="btn btn-outline-info" type="button" value="voltar">Voltar ao início</button></a>
    <hr>
    <br>

</div>
</div>
<div class="row">
    <div class="col-md-6">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            O que é PHP?
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p>A linguagem de programação PHP, foi criada no outono de 1994 por Rasmus Lerdorf. No
                            início era formada por um conjunto de scripts voltados à criação de páginas
                            dinâmicas
                            que Rasmus utilizava para monitorar o acesso ao seu currículo na internet.</p>
                        <p> À medida que
                            essa ferramenta foi crescendo em funcionalidades, Rasmus teve de escrever uma
                            implementação em C, a qual permitia às pessoas desenvolverem de forma muito simples
                            suas
                            aplicações para web. Rasmus
                            nomeou essa versão de PHP/FI (Personal Home Pages/Forms Interpreter) e decidiu
                            disponibilizar seu código na web, em 1995, para compartilhar com outras pessoas, bem
                            como receber ajuda e correção de bugs.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Características do PHP
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Multi-paradigma</li>
                            <li>Multi-plataforma</li>
                            <li>Fracamente Tipada</li>
                            <li>Open-source</li>
                            <li>livre, inclusive para aplicações comerciais (Grátis)</li>
                            <li>Server-Side</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Como funciona o PHP?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        O código escrito por um programador é interpretado pelo servidor, o qual processa os
                        dados e gera uma resposta que é normalmente uma pagina HTML, ou seja, o seu código PHP
                        nunca é visto pelo usuário, o que aumenta a segurança em se tratando de aplicativos
                        compilados que rodam no lado do cliente e estão sujeitos a engenharia reversa.

                        Entrada de dados se da através de transações HTTP assim como as respostas ao terminal
                        solicitante.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="del">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#del4" aria-expanded="false" aria-controls="del4">
                            Delimitadores de código
                        </button>
                    </h5>
                </div>
                <div id="del4" class="collapse" aria-labelledby="del" data-parent="#accordion">
                    <div class="card-body">
                        <p>O código de um programa escrito em PHP deve estar contido entre os seguintes
                            delimitadores:</p>
                        <p>Obs.: PHP pode estar contido entre códigos HTML.</p>
                        <p><code>&lt;?php</code></p>
                        <!-- &gt; -->
                        <p>// código;</p>
                        <p>// código;</p>
                        <p>// código;</p>
                        <p><code>?></code></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="com">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#com5" aria-expanded="false" aria-controls="com5">
                            Comentários
                        </button>
                    </h5>
                </div>
                <div id="com5" class="collapse" aria-labelledby="com" data-parent="#accordion">
                    <div class="card-body">
                        Para comentar uma única linha:
                        <p></p>// echo "a";
                        <p># echo "a";</p>
                        <p>Para comentar muitas linhas:</p>
                        <p>/* echo "a";</p>
                        <p>echo "b"; */</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="comsaida">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#comsaida6" aria-expanded="false" aria-controls="comsaida6">
                            Comandos de saída (output)
                        </button>
                    </h5>
                </div>
                <div id="comsaida6" class="collapse" aria-labelledby="comsaida" data-parent="#accordion">
                    <div class="card-body">
                        <p>Estes são os comandos utilizados para gerar uma saída em tela (output). Se o programa
                            PHP
                            for executado na linha de comando (prompt do sistema), a saída será no próprio
                            console.
                            No entanto, se o programa for executado via servidor de páginas web (Apache ou IIS),
                            a
                            saída será exibida na própria página HTML gerada.</p>

                        <p><strong>echo</strong></p>
                        <p>É um comando que imprime uma ou mais variáveis no console.
                            Exemplo: echo 'a', 'b', 'c';
                            Resultado: abc</p>
                        <p><strong>print</strong></p>
                        <p>É uma função que imprime uma string no console. Exemplo: print('abc');
                            Resultado: abc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div id="accordion2">
            <div class="card">
                <div class="card-header" id="vdump">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#vdump7" aria-expanded="false" aria-controls="vdump7">
                            var_dump
                        </button>
                    </h5>
                </div>
                <div id="vdump7" class="collapse" aria-labelledby="vdump" data-parent="#accordion2">
                    <div class="card-body">
                        <p>Imprime o conteúdo de uma variável de forma explicativa, muito comum para se
                            realizar debug. Se o parâmetro for um objeto, ele imprimirá todos os seus atributos;
                            se
                            for um array de várias dimensões, imprimirá todas elas, com seus respectivos
                            conteúdos
                            e tipos de dados.</p>
                        </p>
                        <p>Exemplo:
                            <code>$vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa'); var_dump($vetor);</code>
                        </p>
                        <p>Resultado: <code>array(4) { [0]=> string(5) "Palio" [1]=> string(3) "Gol" [2]=>string(6)
                                "Fiesta" [3]=> string(5) "Corsa" }</code></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="vari">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#vari8" aria-expanded="false" aria-controls="vari8">
                            Variáveis
                        </button>
                    </h5>
                </div>
                <div id="vari8" class="collapse" aria-labelledby="vari" data-parent="#accordion2">
                    <div class="card-body">
                        <p>Variáveis são identificadores utilizados para representar valores mutáveis e
                            voláteis,
                            que só existem durante a execução do programa. Elas são armazenadas na memória
                            RAM e
                            seu
                            conteúdo é destruído após a execução do programa. Para criar uma variável em
                            PHP,
                            precisamos atribuir-lhe um nome de identificação, sempre precedido pelo
                            caractere
                            cifrão
                            ($).
                        </p>

                        <p><code>&lt;?php</code></p>
                        <p><code>$nome = "João";</code></p>
                        <p><code>$sobrenome = "da Silva";</code></p>
                        <p><code>echo "$sobrenome, $nome";</code></p>
                        <p><code>?></code></p>
                        </p>
                        <p>Resultado: da Silva, João</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="atr9">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#oper9" aria-expanded="false" aria-controls="oper9">
                            Operadores de Atribuição
                        </button>
                    </h5>
                </div>
                <div id="oper9" class="collapse" aria-labelledby="atr9" data-parent="#accordion2">
                    <div class="card-body">
                        <p>Um operador de atribuição é utilizado para definir uma variável atribuindo-lhe um
                            valor.</p>
                        <p>O operador básico de atribuição é =.</p>
                        <p><strong>Exemplos:</strong></p>
                        <p><code>&lt;?php</code></p>
                        <p><code>$var += 5;</code> // Soma 5 em $var;</p>
                        <p><code>$var -= 5;</code> // Subtrai 5 em $var;</p>
                        <p><code>$var *=5;</code> // Multiplica $var por 5;</p>
                        <p><code>$var /= 5;</code> // Divide $var por 5;</p>
                        <p><code>?></code></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="rel">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#laci" aria-expanded="false" aria-controls="laci">
                            Relacionais
                        </button>
                    </h5>
                </div>
                <div id="laci" class="collapse" aria-labelledby="rel" data-parent="#accordion2">
                    <div class="card-body">
                        <p>Operadores relacionais são utilizados para realizar comparações entre valores ou
                            expressões, resultando sempre um valor boolean (TRUE ou FALSE). </p>
                        <p><strong>Comparadores</strong></p>
                        <p>== Igual. Resulta verdadeiro (TRUE) se expressões forem iguais.</p>
                        <p>=== Idêntico. Resulta verdadeiro (TRUE) se as expressões forem iguais e do mesmo tipo
                            de dados.</p>
                        <p>!= ou &lt;> Diferente. Resulta verdadeiro se as variáveis forem diferentes.</p>
                        <p>&lt; Menor.</p>
                        <p>> Maior que.</p>
                        <p>&lt;= Menor ou igual.</p>
                        <p>>= Maior ou igual.</p>
                        <p><code>&lt;?php</code></p>
                        <p><code>if (10 > 5) {</code></p>
                        <p><code>echo ‘10 é maior que 5, portanto esse bloco é executado.';}</code></p>
                        <p><code>?></code></p>


                        <p>>Em cálculos complexos, procure utilizar parênteses, sempre observando as prioridades
                            aritméticas.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="ari">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#mat" aria-expanded="false" aria-controls="mat">
                            Aritméticos
                        </button>
                    </h5>
                </div>
                <div id="mat" class="collapse" aria-labelledby="ari" data-parent="#accordion2">
                    <div class="card-body">
                        <p>Operadores</p>
                        <p>+ Adição.</p>
                        <p>- Subtração.</p>
                        <p>* Multiplicação.</p>
                        <p>/ Divisão.</p>
                        <p>% Módulo (resto da divisão).</p>
                        <p>Em cálculos complexos, procure utilizar parênteses, sempre observando as prioridades
                            aritméticas.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="get">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#post" aria-expanded="false" aria-controls="post">
                            Recebendo parâmetros através do HTTP:
                        </button>
                    </h5>
                </div>
                <div id="post" class="collapse" aria-labelledby="get" data-parent="#accordion2">
                    <div class="card-body">
                        <p>Existem dois modos de receber parâmetros, são eles: GET e POST.</p>
                        <p>- GET, vem através do link HTTP</p>
                        <p>Exemplo:
                        </p>
                        <p>pagina_de_calculo.php?var1=valor&var2=valor</p>
                        <p>No código: <code>$var = $_GET[‘var1’];</code></p>
                        <p><code>$var2 = $_GET[‘var2’];</code></p>
                        <p>- POST, vem encapsulado a partir dos ids usados no HTML</p>
                        <p>Exemplo:
                        </p>
                        <p>No código: <code>$var = $_POST[‘id_do_elemento’];</code></p>
                        <p><code>$var2 = $_POST[‘id_do_elemento2’];</code></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <a href="exercicios1.php" target="_self"><button class="btn btn-outline-info" type="button" value="voltar">Ir para o Exercício</button></a>
    <hr>
    <br>
</div>
<?php include "footer.php"  ?>