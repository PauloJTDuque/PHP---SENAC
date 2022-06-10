    <footer class="bg-light text-center">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="">
                <form action="" id="form" name="form" method="get">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Receba novidades do curso</strong>
                            </p>
                        </div>
                        <!--Grid column-->
                        <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> -->
                        <!-- </button> -->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <div class="form-outline mb-4">

                                <input type="email" id="email" name="email" class="form-control" placeholder="e-mail" required />
                                <label class="form-label" for="email">Coloque seu melhor e-mail</label>
                                <br>
                                <span id="inscrito"></span>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">

                            <!-- Submit button -->
                            <input type="submit" value="Increva-se" id="enviar" class="btn btn-outline-success mb-4" />
                </form>
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © <?php
                $Year = date("Y");
                echo "$Year";
                echo "\n";
                ?> Copyright:
            <a class="text-dark" href="https://www.sp.senac.br/senac-rio-claro" target="_blank">Lincoln S. Barbosa em Senac - Rio Claro</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- IMport JQuery Mask-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="search.js"></script>
    <script src="sendform.js"></script>
    <script>
        $(document).ready(function() {
            //cep: 00.000-000
            // $('#cep').mask('00.000-000');
            // $('#telefone').mask('(00) #0000-0000');
            // $('#cpf').mask('000.000.000-00', { reverse: true, placeholder: '___.___.___-__' });
            // $('#data').mask('00/00/0000', { placeholder: '__/__/____' });
            $('#vsoma1').mask('#.##0,00', {
                reverse: true
            });
            $('#vsoma2').mask('#.##0,00', {
                reverse: true
            });
            $('#vsub1').mask('#.##0,00', {
                reverse: true
            });
            $('#vsub2').mask('#.##0,00', {
                reverse: true
            });
            $('#vmult1').mask('#.##0,00', {
                reverse: true
            });
            $('#vmult2').mask('#.##0,00', {
                reverse: true
            });
            $('#vdiv1').mask('#.##0,00', {
                reverse: true
            });
            $('#vdiv2').mask('#.##0,00', {
                reverse: true
            });
            //Placa AAA-0000
            // var optionsPlaca = {
            //     'translation': {
            //         A: {
            //             pattern: /[A-Z]/
            //         }
            //     }
            // };
            // $('#placa').mask('AAA-0000', optionsPlaca);
            // //000.000.000.000
            // //192.168.254.254, 10.10.0.1
            // var optionsIp = {
            //     'translation' : {
            //         'Z' : {
            //             pattern: /[0-9]/,
            //             optional: true
            //         }
            //     }
            // };
            // $('#ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', optionsIp);
            // $('input#input_text').characterCounter();

        });

        // let msgsucess = 'Parabéns, você receberá novidades sobre o curso';
        // let msgfail = "Ops, tente novamente";

        // $(document).ready(function() {
        //     $("#form").on("submit", function(e) {
        //         e.preventDefault();
        //         var email = $("#email").val();
        //         $.ajax({
        //             url: "enviar.php",
        //             method: "GET",
        //             dataType: "html",
        //             data: email
        //         }).done(function(data) {
                    // document.getElementById('inscrito').innerHTML = msgsucess;
                    // document.getElementById("inscrito").style.color = "green";
        //         }).fail(function(data) {
        //             document.getElementById('inscrito').innerHTML = msgfail;
        //             document.getElementById("inscrito").style.color = "red";
        //         });

        //     });
        // });
    </script>
    </body>

    </html>