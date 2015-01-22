<?php 
	define("TITLE", "Contactanos | Iglesia Evangelica Nueva Jerusalem");

	include('includes/php/header.php');
?>
<div class="row">
    <div class="col-sm-6">
        <h1>Contactanos</h1>
        <p>La palabra del senor dice: Clama a mí, y yo te responderé, y te enseñaré cosas grandes y ocultas que tú no conoces. Jeremías 33:3. El Senor es el mejor punto de contacto para salvacion. Si quieres congregarte con nosotros hablanos o llena el formulario.</p>
        <h3>El Padre</h3>
        <p>Nombre: יהוה </p>
        <p>Direcion: El Reyno de los Cielos</p>
        <p>Forma de Contacto: Orando en el nombre de Jesucristo</p>

        <h3>Pastor</h3>
        
        <p>Nombre: Arturo Hernandez</p>
        <p>Direccion: 18400 Lockwood Rd Manor, Texas</p>
        <p>Email: N/A</p>
        <p>Telefono: 512-913-8295</p>
    </div><!-- end class col-sm-6 -->

    <div class="col-sm-6">
        <br>
        <?php 
            // Check for header injections
            function has_header_injection($str) {
                return preg_match( "/[\r\n]/", $str );
            }

            if (isset ($_POST['contact_submit'])){

                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $msg = $_POST['message'];

                // Check to see if $name or $email have header injections
                if (has_header_injection($name) || has_header_injection($email)) {
                    die(); // If true, kill the script
                }

                // Check if empty
                if ( !$name || !$email || !$msg ) {
                    echo '<h4 class="error">All fields required.</h4><a href="contactanos.php" class="button
                     block">Go back and try again</a>';
                     exit;

                }

                // Add the recipient email to a variable
                $to = "mendezdavey@gmail.com";

                // Create a subject
                $subject = "$name sent you a message via your contact form";

                // Construct the message
                $message = "Name: $name\r\n";
                $message .= "Email: $email\r\n";
                $message .= "Message:\r\n$msg";

                // IF the subscribe checkbox was checked...
                if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {

                    // Add a new line to the message variable
                    $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";

                }

                $message = wordwrap($message, 72);

                // Set the mail headers into a variable
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                $headers .= "From: $name <$email>\r\n";
                $headers .= "X-Priority: 1\r\n";
                $headers .= "X-MSMail-Priority: High\r\n\r\n";

                // Send the email!
                mail( $to, $subject, $message, $headers );

            

        ?>

        <!-- Show succes message after email is sent -->
        <h5>Gracias por contactarnos</h5>
        <p>Porfavor espere 24 horas para una respuesta.</p>

        <?php } else { ?>
        
        <form method="post"  id="contact-form">
        <fieldset>
        <legend><h3>Informacion Personal</h3></legend>
        <h4>Formulario de Contacto</h4>
        
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name">
        <br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" >
        <br>
        
        <label for="phone">Telefono:</label><br>
        <input type="text" id="phone" name="phone">
        <br>

        <label for="message">Tu Mensaje</label><br>
        <textarea rows="5" cols="45" id="message" name="message"></textarea>
        <br>
        <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
        <label for="checkbox">Subscribe to newsletter</label>
        <br>

        <input type="submit" class="button next" name="contact_submit" value="Envia Mensaje">
        </fieldset>
        </form>
        <br>

        <?php } ?>

        <hr>
    </div><!-- end class 2col-sm-6 -->
</div><!-- end of class row -->

<div class="row">
    <div class="col-12">
    <h3>Ubicacion</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d861.1582863422125!2d-97.5266996665444!3d30.304503726674905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b8ac8b8d35cf%3A0x181af58855798f2a!2s18400+Lockwood+Rd%2C+Manor%2C+TX+78653!5e0!3m2!1sen!2sus!4v1406340671782" width="100%" height="320" frameborder="0" style="border:0"></iframe>
    </div><!-- end col-12 -->
</div><!-- end row -->

<?php
	include('includes/php/footer.php');
?>