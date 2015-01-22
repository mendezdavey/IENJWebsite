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
        <form method="post" action="" id="contact-form">
            
            <label for="name">Tu Nombre</label>
            <input type="text" id="name" name="name">

            <label for="email">Tu Email</label>
            <input type="email" id="email" name="email">

            <label for="message">Tu Mensaje</label>
            <textarea id="message" name="message">

            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="message">Subscribe to newsletter</label>
            
            <input type="submit" class="button next" name="contact_submit" value="Envia Mensaje">

        </form>
        <br>
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