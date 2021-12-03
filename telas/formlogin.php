<?php
    include 'header.php';
?>
            
    <link rel="stylesheet" href="../css/login.css">

        <main class ="container">
            
            <h2> Login Rentall </h2>
            <form method = "post" action="../login/login.php" >
                <div class="input-field">
                    <input type="text" name="email" id="email" placeholder="usuario@exemplo.com">
                    <div class="underline"> </div>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password" placeholder="Senha">
                    <div class="underline"> </div>
                </div>
                <input type="submit" value="continue">
            </form>

            <div class="footer">
                <span> Acesse com as midias sociais </span>
                <div class="social-fields">
                    <div class="social-field google">
                        <a href="#">
                            <i class="fab fa-google"></i>
                            Entre com Google
                        </a>
                    </div>

                    <div class="social-field facebook">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            Entre com Facebook
                        </a>
                    </div>

                    <span class="novo-usuario">
                        <a href="novoUser.php">
                         Cadastre-se
                        </a>
                        <a class="text-center mt-2" style="text-decoration: none; color: #808080" href="../telas/index.php">
                        <spam> Continue como visitante </spam>
                        </span>

          
                </div>
            </div>
            
        </main>
</section>
</html>

