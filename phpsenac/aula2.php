<?php include "header.php"  ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 id="h1principal">Aula 2 - Funções</h3>
            <h4 id="h2center">Trabalhando com Funções</h4>
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
                                Escopo
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>O escopo é o contexto onde foi definido o elemento, geralmente podemos classificar em duas divisões: Global e Local.
                            </p>
                            <p> Um elemento definido no escopo de <code>&lt;?php ?></code> pode ser encarado como GLOBAL:</p>
                            <ul>
                                <li>funções</li>
                                <li>classes</li>
                                <li>interfaces</li>
                                <li>constantes (menos constantes de classes)</li>
                                <li>
                                    variáveis definidas fora de funções e métodos</li>
                            </ul>
                            <p>Um elemento definido dentro de uma função por exemplo é considerado LOCAL, por que tem sua vida atrelada ao seu tempo de execução.</p>
                            <p>
                            <blockquote class="blockquote">Obs.: *Contudo, diferente de outras linguagens em PHP é preciso definir as variáveis globais para que funcionem no escopo local.
                            </blockquote>
                            </p>
                            <p><b>** Funções criadas dentro de funções, passam a ter escopo global após sua primeira execução.</b></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Funções (Functions) ou Métodos
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>As funções são usadas para deixar o código mais organizados e mais modular. Poupando o desenvolvedor de repetir o mesmo código sempre que precisar refazer a mesma tarefa.</p>
                            <p>Nos modelos orientados a objeto, as funções passam a serem chamadas de métodos, logo a partir do uso de frameworks PHP que usam o paradigma de orientação a objetos pode ser usado a palavra método para se fazer referencia a uma função.</p>
                            <p><b>Código</b></p>
                            <p><code>&lt;?php</code></p>
                            <p><code>function nome_funcao($arg_1, $arg_2, /* ..., */ $arg_n)</code></p>
                            <p><code>{</code></p>
                            <p><code>echo "Exemplo de função.\n";</code></p>
                            <p><code>[return $valor_retornado;]</code></p>
                            <p><code>}</code></p>
                            <p><code>?></code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Nomes das funções
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <p>Nomes de funções seguem as mesmas regras que outros rótulo no PHP. Um nome de função válido começa com uma letra ou um sublinhado, seguido, seguido por qualquer número de letras, números ou sublinhado.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="del">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#del4" aria-expanded="false" aria-controls="del4">
                                Argumentos (Parâmetros)
                            </button>
                        </h5>
                    </div>
                    <div id="del4" class="collapse" aria-labelledby="del" data-parent="#accordion">
                        <div class="card-body">
                            <p>Argumentos ou paramentos (OO) são valores que podem ser enviados a partir de uma chamada de uma função.</p>
                            <p>É possível ter uma função com nenhum argumento até uma serie de argumentos.</p>
                            <p>Argumentos opcionais podem ser criados atribuindo um valor padrão ao argumento direto na assinatura da função.</p>
                            <p>
                            <blockquote class="blockquote">* Os nomes atribuídos aos argumentos, são usados apenas dentro da função, portanto não é necessário que a variável passada como argumento tenha o mesmo nome.</blockquote>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="com">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#com5" aria-expanded="false" aria-controls="com5">
                                Argumentos por Valor e Referência
                            </button>
                        </h5>
                    </div>
                    <div id="com5" class="collapse" aria-labelledby="com" data-parent="#accordion2">
                        <div class="card-body">
                            <p>Por padrão os argumentos são passados por valor, ou seja, é enviado uma cópia do valor da variável para a função, logo qualquer alteração feita dentro da função ficara restrita a ela.
                            </p>
                            <p>Os argumentos passados por referência, ou seja, envia-se o endereço da variável, uma vez alterados dentro da função, são então refletidos nas variáveis originais, para se passar um argumento por referencia usa-se o sinal &.</p>
                            <p><b>Código</b></p>
                            <p><code>&lt;?php</code></p>
                            <p><code>function exemplo($valor, &$referencia)</code></p>
                            <p><code>{</code></p>
                            <p><code>return "Exemplo de função.\n";</code></p>
                            <p><code>}</code></p>
                            <p><code>?></code></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="comsaida">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#comsaida6" aria-expanded="false" aria-controls="comsaida6">
                                Retorno
                            </button>
                        </h5>
                    </div>
                    <div id="comsaida6" class="collapse" aria-labelledby="comsaida" data-parent="#accordion2">
                        <div class="card-body">
                            <p>A palavra-chave(comando) return é opcional, pois faz parte do construtor da função, ou seja caso ela seja omitida, um return com o valor null será automaticamente usado.</p>

                            <p>É importante saber que ao término da execução de uma função ou a chamada de um return o processamento do código volta para o ponto onde a chamada foi realizada e prossegue em diante.</p>
                            <p>Return pode ser usado para no momento do retorno, a chamada a função é substituída pelo valor retornado.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="vdump">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#vdump7" aria-expanded="false" aria-controls="vdump7">
                                Recursividade
                            </button>
                        </h5>
                    </div>
                    <div id="vdump7" class="collapse" aria-labelledby="vdump" data-parent="#accordion2">
                        <div class="card-body">
                            <p>Assim como na maioria das linguagens de programação pode se usar recursividade em PHP sem uso de comandos ou palavras-chave.</p>
                            </p>
                            <p><b>Recursividade é definido pela habilidade de uma função chamar a si mesma.</b>
                            </p>
                            <p>Recursividade pode ser classificada de duas formas direta e indireta, direta é quando a função chama a si mesma, e indireta é quando a função a chama função b que por sua vez chama a função a novamente, sendo então classificada como recursiva indireta.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="vari">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#vari8" aria-expanded="false" aria-controls="vari8">
                                Referências:
                            </button>
                        </h5>
                    </div>
                    <div id="vari8" class="collapse" aria-labelledby="vari" data-parent="#accordion2">
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
    <a href="exercicios2.php" target="_self"><button class="btn btn-outline-info" type="button" value="voltar">Ir para o Exercício</button></a>
    <hr>
    <br>
</div>

<?php include "footer.php"  ?>