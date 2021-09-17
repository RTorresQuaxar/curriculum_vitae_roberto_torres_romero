<?php include("includes/header.php")?>



<main class = "main"> 
<div class="info-content">
    <img src="images/imagen.png" alt = "Foto de perfil">
    <h1>Roberto Torres</h1>
    <p> Mi nombre es Roberto Torres Romero, tengo <strong>21 años</strong> y soy Ingeniero de Software.<br>
    <strong>Perfil Profesional: </strong> Me considero una persona responsable y dinámica, con capacidad de adaptación y capacidades para trabajar en equipo.<br>
    <strong>Perfil Profesional: </strong> Poner en práctica todos los conocimientos adquiridos durante la universidad y poder formar parte de un equipo de desarrollo.<br>
    <p>
 </div>
</main>
</div>

<div class="educacion">
    <img src="images/universidad.png" alt="instalaciones UV Campus Coatzacoalcos">
    <div class="educacion-info">
        <h2>Formación Educativa</h2>
        <h3>2018 - Actualidad</h3>
        <p>Licenciatura en ingenería de Software | Universidad Veracruzana Campus Coatzacoalcos.</p>
        
     </div>
</div>

<div class="trabajo">
    <img src="images/clinica.png" alt="Veterinaria Los 2 Potrillos" style = "float:right">
    <div class="trabajo-info">
        <h2>Experiencia laboral</h2>
        <h3>2018 - 2019</h3>
        <p>Desarrollo de Aplicación Android | Clinica Veterinaria Los 2 Potrillos.</p>
        <h3>2019 - 2020</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae provident.</p>
        <h3>2020 - Actualidad</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae provident.</p>

     </div>
</div>

<div class="skills">
    <h2>Skills</h2>
<div class="row">
<div class="col-md-12">
<div class="progress-title">
<h3>Requerimientos</h3>
<div class="progress">

    <div class="progress-bar" style="width: 85%; background: #ef2d56;">
            <div class="progress-value"><strong>85%</strong></div>

</div>
</div>
</div>
<h3>Adobe XD</h3>
<div class="progress">

    <div class="progress-bar" style="width: 75%; background: #48C9B0;">
            <div class="progress-value"><strong>75%</strong></div>

</div>
</div>
</div>
</div>
<h3>Java</h3>
 <div class="progress">
 
     <div class="progress-bar" style="width: 55%; background: #E67E22;">
             <div class="progress-value"><strong>55%</strong></div>
 
 </div>
 </div>
 </div>



<div class="contacto">
</head>
<body>
    <form method="post">
    	<h1>Contacto</h1>
        <img src="images/business-contact.png" alt = "icono contacto" style = "float: right ">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</div>


</body>
</html>
<?php include("includes/footer.php")?>