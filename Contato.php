<!DOCTYPE html>
<html lang="pt-br">
    <?php require_once"include/head.php" ?>

    <body>
        <?php require_once"include/navbar.php" ?>

        <main>

            <div class="container">
            <h1 class="blue-text text-darken-2">Fale conosco!</h1>

            <div class="row">
                
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix icon_form">account_circle</i>
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix icon_form">email</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix icon_form">mode_comment</i>
                        <textarea id="mensagem" type="textarea" class="materialize-textarea"></textarea>
                        <label for="mensagem">Digite sua mensagem aqui!</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light right" type="submit" name="action" onclick="alert('Seu formulário foi recebido.\nAgradecemos o contato!')">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>

            
            </div><br>

            </div>
        
        </main>

        <?php require_once"include/footer.php" ?>

    </body>
</html>
