<?php 
    //Import da Biblioteca PHPMailer
    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";

    //Importando o Namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //debugArray($_POST);

    //Criando o Objeto de Mensagem
    class Mensagem {
        private $para = null;
        private $assunto = null;
        private $mensagem = null;
        public $status = array('codigo_status' => null, 'descricao_status' => '');

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function mensagemValida(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            } else if (strlen($this->mensagem) <= 15){
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    //Valida campos
    if(!$mensagem->mensagemValida()){ // Caso a mensagem Não seja valida!
        echo 'Mensagem não é válida';
        //die(); // Mata o processamento do script no ponto em que é lido!
        header('Location: index.php?msg=error');
    }

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = false;                             // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'devnicollas@gmail.com';            // SMTP username
        $mail->Password = 'W@fi#Wm0P9Dl';                     // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('devnicollas@gmail.com', 'Nicollas Feitosa Email System');
        $mail->addAddress($mensagem->__get('para'));     // Add a recipient
        //$mail->addReplyTo('devnicollas@gmail.com', 'Nicollas Feitosa Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $mensagem->__get('assunto');
        $mail->Body    = $mensagem->__get('mensagem');
        $mail->AltBody = 'É necessário utilizar um client que suporte HTML para ter acesso total ao conteudo dessa mensagem!';

        $mail->send();

        $mensagem->status['codigo-status'] = 1;
        $mensagem->status['descricao-status'] = 'E-mail enviado com sucesso!';


    } catch (Exception $e) {

        $mensagem->status['codigo-status'] = 2;
        $mensagem->status['descricao-status'] = 'Não foi possivel enviar este e-mail! Detalhe do erro: '. $mail->ErrorInfo;
        //Alguma logica que armazene o erro em um banco de dados ou arquivo de log
    }

    //debugArray($mensagem);

    // Apenas para facilitar a vida
    function debugArray($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>App Mail Send</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
        </div>
        
        <div class="row">
            <div class="col-md-12">

            <?php if ($mensagem->status['codigo-status'] ==  1) { ?>
            
                <div class="container">
                    <h1 class="display-4 text-success">Sucesso!</h1>
                    <p><?= $mensagem->status['descricao-status'] ?></p>
                    <a class="btn btn-success btn-lg mt-5 text-white" href="index.php" role="button">Voltar</a>
                </div>
                
            <?php } ?>

            <?php if ($mensagem->status['codigo-status'] ==  2) { ?>
            
                <div class="container">
                    <h1 class="display-4 text-danger">Ops!</h1>
                    <p><?= $mensagem->status['descricao-status'] ?></p>
                    <a class="btn btn-danger btn-lg mt-5 text-white" href="index.php" role="button">Voltar</a>
                </div>
                
            <?php } ?>
            
            

            </div>
        </div>

    </div>



  </body>
</html>