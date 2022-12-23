<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTATO</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="css/styles.css" class="">
</head>

<body>

    <div id="main-container">

        <div id="address-container">

            <div class="fade"></div>

            <div id="address-content">

                <h2>
                    <ion-icon name="navigate-outline"></ion-icon> Endereço:
                </h2>

                <p>Rua das Flores, 133</p>
                <h2>
                    <ion-icon name="call-outline"></ion-icon> Telefone:
                </h2>

                <p>(31)99999-9999</p>
                <h2>
                    <ion-icon name="mail-outline"></ion-icon> E-mail:
                </h2>

                <p>meuemail@email.com</p>

            </div>

        </div>

        <div id="form-container">

            <form id="contact-form">
                <h2>NOS MANDE UMA MENSAGEM!</h2>
                <label for="name">Nome:</label>
                <input type="text" name="name" placeholder="Digite seu nome">
                <label for="email">E-mail:</label>
                <input type="email" name="name" placeholder="Digite seu e-mail">
                <label for="phone">Telefone:</label>
                <input type="text" name="name" placeholder="Digite seu telefone">
                <label for="msg">Sua mensagem:</label>
                <textarea name="msg" placeholder="Como podemos te ajudar?"></textarea>
                <input type="submit" value="Enviar Mensagem">
            </form>

        </div>

    </div>

    {{-- IONICONS --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</body>

</html>
