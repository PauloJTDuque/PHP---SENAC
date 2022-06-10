<?php include "header.php"  ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 id="h1principal">Aula 3 - Estruturas de Controle</h3>
            <h4 id="h2center">Entendendo as Estruturas de Controle</h4>
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
                                Intro.
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>As estruturas de controle são usadas para realizar repetições de blocos de código, e também repetições condicionais,
                                e principalmente alteração condicional no fluxo da sequencia de execução.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Estruturas
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Algumas das estruturas de controle:</p>
                            <ul>
                                <li>If</li>
                                <li>Switch</li>
                                <li>While</li>
                                <li>Do-While</li>
                                <li>For</li>
                                <li>Foreach</li>
                                <li>Break</li>
                                <li>Continue</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                IF
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <p>A estrutura if permite alterar o fluxo do código, de acordo com o resultado de uma operação booleana.</p>
                            <p><b>Sintaxe:</b></p>
                            <p><code>If(boolean)</code></p>
                            <p><code>{</code></p>
                            <p><code>Bloco;</code></p>
                            <p><code>}</code></p>
                            <p><code>[elseif (boolean) {bloco;}}</code></p>
                            <p><code>[else()]{}[...]]</code></p>
                            <p><b>IF - Exemplos</b></p>
                            <p><code>if (5 < 10) {</code>
                            </p>
                            <p><code>echo "5 é menor que 10, portanto essa linha é executada.";</code></p>
                            <p><code>}</code></p>
                            <p><code>if (10 > 100) {</code></p>
                            <p><code>echo “10 não é maior que 100, logo essa linha não será executada";</code></p>
                            <p><code>}else{</code></p>
                            <p><code>echo "Uma vez que o resultado é negativo, o bloco else é executado";</code>
                            </p>
                            <p><code>}</code></p>
                            <p><code>if (true) {</code></p>
                            <p><code>} elseif(true) {</code></p>
                            <p><code>} elseif(true) {</code></p>
                            <p><code>//...</code></p>
                            <p><code>}</code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="switch">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#switch4" aria-expanded="false" aria-controls="switch4">
                                Switch
                            </button>
                        </h5>
                    </div>
                    <div id="switch4" class="collapse" aria-labelledby="switch" data-parent="#accordion">
                        <div class="card-body">
                            <p>A estrutura switch permite a partir de um operador fazer a resolução da comparação com = “igual” em diversos casos,
                                é uma alternativa útil para substituir um if quando há muitas opções.
                            </p>
                            <p><b>Sintaxe:</b></p>
                            <p><code>{</code></p>
                            <p><code>case valor1:</code></p>
                            <p><code>bloco;</code></p>
                            <p><code>break;</code></p>
                            <p><code>case valor2:</code></p>
                            <p><code>bloco;</code></p>
                            <p><code>break;</code></p>
                            <p><code>case valor2:</code></p>
                            <p><code>bloco;</code></p>
                            <p><code>break;</code></p>
                            <p><code>case valor:</code></p>
                            <p><code>default:</code></p>
                            <p><code>bloco;</code></p>
                            <p><code>break;</code></p>
                            <p><code>}</code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="while">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#while5" aria-expanded="false" aria-controls="while5">
                                While
                            </button>
                        </h5>
                    </div>
                    <div id="while5" class="collapse" aria-labelledby="while" data-parent="#accordion">
                        <div class="card-body">
                            <p><b>Sintaxe:</b></p>
                            <p><code>while(condição boolean){bloco;}</code></p>
                            <p><b>Exemplo:</b></p>
                            <p><code>while (true) {</code></p>
                            <p><code>echo "Linha é executada para sempre";</code></p>
                            <p><code>//looping infinito</code></p>
                            <p><code>}</code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="dowhile">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#dowhile6" aria-expanded="false" aria-controls="dowhile6">
                                Do - While
                            </button>
                        </h5>
                    </div>
                    <div id="dowhile6" class="collapse" aria-labelledby="dowhile" data-parent="#accordion">
                        <div class="card-body">
                            <p><b>Sintaxe:</b></p>
                            <p><code>do { bloco; } while (condição boolean);</code></p>
                            <p><b>Exemplo:</b></p>
                            <p><code>do {</code></p>
                            <p><code>echo "Essa linha será rodada uma única vez!");</code></p>
                            <p><code>} while (false);</code></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="for">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#for7" aria-expanded="false" aria-controls="for7">
                                For
                            </button>
                        </h5>
                    </div>
                    <div id="for7" class="collapse" aria-labelledby="for" data-parent="#accordion2">
                        <div class="card-body">
                            <p>Um laço for é repetido até que a condição especificada seja falsa. É muito usado para repetir tarefas, e também percorrer dados como vetores,
                                matrizes e resultados de consultas a banco de dados.</p>
                            </p>
                            <p><b>Sintaxe:</b></p>
                            <p><code>for (declaração de indice; condição; incremento) {bloco;}</code></p>
                            <p><b>Exemplo:</b></p>
                            <p><code>for ($i= 0; $i < 10; $i=$i + 1) {</code>
                            </p>
                            <p><code>echo "Contando: " . $i;</code></p>
                            <p><code>}</code></p>
                            <p><small><b>Obs: $i = $i + 1 ou $i += 1 ou $i++</b></small></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="foreach">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#foreach8" aria-expanded="false" aria-controls="foreach8">
                                Foreach
                            </button>
                        </h5>
                    </div>
                    <div id="foreach8" class="collapse" aria-labelledby="foreach" data-parent="#accordion2">
                        <div class="card-body">
                            <p>Um laço foreach é uma versão moderna de um for, com a função especifica de percorrer vetores e matrizes (Arrays). A cada iteração, o valor do elemento atual é atribuído a $valor e o ponteiro interno do array avança uma posição
                                (então, na próxima iteração, se estará olhando para o próximo elemento).</p>
                            <p><b>Sintaxe:</b></p>
                            <p><code>Foreach ($vetorOUmatriz as $valor){bloco;}</code></p>
                            <p><b>Exemplo:</b></p>
                            <p><code>foreach ($vetor as $valor) {</code></p>
                            <p><code>echo "Valor individual do vetor: $valor";</code></p>
                            <p><code>}</code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="break">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#break9" aria-expanded="false" aria-controls="break9">
                                Break
                            </button>
                        </h5>
                    </div>
                    <div id="break9" class="collapse" aria-labelledby="break" data-parent="#accordion2">
                        <div class="card-body">
                            <p>O <b>break</b> termina a execução do comando atual, que pode ser for, foreach, while ou switch. Quando o break é executado dentro de uma estrutura
                                de controle ela termina a execução mesmo que não tenha sido executada por completo</p>
                            <p><b>Exemplo:</b></p>
                            <p><code>foreach ($vetor as $valor) {</code></p>
                            <p><code>echo "Valor individual do vetor: $valor";</code></p>
                            <p><code>if($valor = $valorProcurado)</code></p>
                            <p><code>{break;}</code></p>
                            <p><code>}</code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="continue">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#continue10" aria-expanded="false" aria-controls="continue10">
                                Continue
                            </button>
                        </h5>
                    </div>
                    <div id="continue10" class="collapse" aria-labelledby="continue" data-parent="#accordion2">
                        <div class="card-body">
                            <p>O comando continue é utilizado dentro dos comandos de repetição para ignorar o restante das instruções
                                pertencentes ao laço corrente e ir para a próxima iteração (voltando ao inicio do laço).</p>
                            <p><b>Exemplo:</b></p>
                            <p><code>foreach ($vetor as $valor) {</code></p>
                            <p><code>echo "Valor individual do vetor: $valor";</code></p>
                            <p><code>if($valor = $valorProcurado)</code></p>
                            <p><code>{continue;}</code></p>
                            <p><code>echo " Valor não encontrado! ";</code></p>
                            <p><code>}</code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="shortcode">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#shortcode11" aria-expanded="false" aria-controls="shortcode11">
                                Shortcode (Código curto)
                            </button>
                        </h5>
                    </div>
                    <div id="shortcode11" class="collapse" aria-labelledby="shortcode" data-parent="#accordion2">
                        <div class="card-body">
                            <p>++ Equvalente: x = x + 1;</p>
                            <p>-- Equvalente: x = x - 1;</p>
                            <p>+= Equvalente: x = x + y;</p>
                            <p>.= Equvalente: x = x . x;</p>
                            <p>-= Equvalente: x = x - y;</p>
                            <p>*= Equvalente: x = x * y;</p>
                            <p>/= Equvalente: x = x / y;</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="conversao">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#conversao12" aria-expanded="false" aria-controls="conversao12">
                                Conversão para booleano
                            </button>
                        </h5>
                    </div>
                    <div id="conversao12" class="collapse" aria-labelledby="conversao" data-parent="#accordion2">
                        <div class="card-body">
                            <p>Para converter explicitamente um valor para booleano, utilize os modificadores (bool) ou (boolean). Entretanto, na maioria dos casos, o modificador não será necessário,
                                já que qualquer valor será convertido automaticamente se um operador, função ou estrutura de controle requerer um argumento booleano.</p>
                            <p>Ao converter para booleano, os seguintes valores são considerados <b>FALSE:</b></p>
                            <ul>
                                <li><b></b>próprio booleano FALSE</li>
                                <li><b>inteiro 0 (zero)</b></li>
                                <li><b>ponto flutuante 0.0 (zero)</b></li>
                                <li><b>uma string vazia e a string "0"</b></li>
                                <li><b>um array sem elementos</b></li>
                                <li><small>um objeto sem variáveis membros (somente PHP 4)</small></li>
                                <li><small>tipo especial NULL (incluindo variáveis não definidas)</small></li>
                                <li><small>objeto SimpleXML criado de tags vazias</small></li>
                            </ul>
                            <p><b>Qualquer outro valor é considerado TRUE</b></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="refe">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#refe13" aria-expanded="false" aria-controls="refe13">
                                Referências:
                            </button>
                        </h5>
                    </div>
                    <div id="refe13" class="collapse" aria-labelledby="refe" data-parent="#accordion2">
                        <div class="card-body">
                            <p><a class="link" href="http://php.net/manual/pt_BR/" target="_blank">http://php.net/manual/pt_BR/</a>
                            </p>
                            <p><a class="link" href="https://developer.mozilla.org/en-US/docs/Glossary/PHP" target="_blank">https://developer.mozilla.org/en-US/docs/Glossary/PHP</a>
                            </p>
                            <p><a class="link" href="http://www.w3schools.com/" target="_blank">http://www.w3schools.com/</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="exercicios3.php" target="_self"><button class="btn btn-outline-info" type="button" value="voltar">Ir para o Exercício</button></a>
    <hr>
    <br>
</div>

<?php include "footer.php"  ?>