<?php
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

// ENVIAR CORREO ==============================================================
    /*
    Primero, obtenemos el listado de e-mails
    desde nuestra base de datos y la incorporamos a un Array.
    */
    require("controllers/controller-mailer/datos-email.php");
    $array = array($correoPrincipal,$emailCopia);

    /* 
    Incluimos el PHPMailerAutoload, que se encarga de incorporar 
    a nuestro código, todos los archivos necesarios para utilizar la librería.
    Supongamos que guardamos dicha librería en un directorio llamado "phpmailer"
    */

    require("controllers/controller-mailer/PHPMailerAutoload.php"); 

    $mail = new PHPMailer;

    // Configuramos los datos de sesión para conectarnos al servicio SMTP de Mandrill
    $mail->IsSMTP(); // Indicamos que vamos a utilizar SMTP
    $mail->Host = $HostSMTP; // El Host de Gmail
    $mail->Port = $puerto;  // El puerto que Mandrill nos indica utilizar
    $mail->SMTPAuth = $autenticacion; // Indicamos que vamos a utilizar auteticación SMTP       
    $mail->Username = $user; // Nuestro usuario en Gmail
    $mail->Password = $pass; // Nuestro password en Gmail 
    $mail->SMTPSecure = $cifrado; // Activamos el cifrado tls (también ssl)

    // Ahora configuraremos los parámetros básicos de PHPMailer para hacer un envío típico
    $mail->CharSet = 'UTF-8';
    $mail->From = $correoContacto; // Nuestro correo electrónico
    $mail->FromName = 'Universidad Santo Tomás'; // El nombre de nuestro sitio o proyecto
    $mail->IsHTML(true); // Indicamos que el email tiene formato HTML
    $mail->AddAttachment($dirProyecto."/".$fileNameMT);
    $mail->AddAttachment($dirProyecto."/".$fileNameCAP);
    $mail->AddAttachment($dirProyecto."/".$fileNameCACIP);
    $mail->AddAttachment($dirProyecto."/".$fileNameFEBIC);
    $mail->AddAttachment($dirProyecto."/".$fileNameCAEE);
    $mail->Subject = "Proyecto FODEIN 2020"; // El asunto del email
    $mail->Body = "
<h1 style='color:#525B6A;text-align: center;font-family: sans-serif; font-size: 1.4rem;background:#F6F7F9;padding:0.3rem;max-width: 1000px; width: 90%; margin:1rem auto;box-sizing: border-box;'>Informe de Proyecto de Investigación</h1>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.3333%'>Título del proyecto</th>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.3333%'>Duración</th>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.3333%'>Lugar de ejecución</th>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='33.3333%'>".$titulo."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='33.3333%'>".$duracion."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='33.3333%'>".$lugar."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Nombre del Investigador principal</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Enlace CvLAC</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Enlace ORCID</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Enlace Google Académico</th>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$nombresIN."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$urlCvLAC."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$urlORCID."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$urlGooAca."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>División</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Facultad</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Programa</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Línea activa</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Campos de acción</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Grupo de investigación</th>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='16.666%'>".$division."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='16.666%'>".$facultad."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='16.666%'>".$programa."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='16.666%'>".$lineaActiva."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='16.666%'>".$camposAccion."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' width='16.666%'>".$gInvestigacion."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Nombre(s) CO-Investigadores</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Enlace CvLAC</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Enlace ORCID</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='25%'>Enlace Google Académico</th>
    </tr>
    $echo2
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>División</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Facultad</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Programa</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Línea activa</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Campos de acción</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='16.666%'>Grupo de investigación</th>
    </tr>
    $echo7
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='50%'>Resumen de la propuesta</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='50%'>Palabras clave</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;' width='50%'>".nl2br($resumenPro)."</td>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;' width='50%'>".nl2br($palabrasClave)."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Planteamiento del problema y pregunta de investigación</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".nl2br($planteamiento)."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Justificación</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".nl2br($justificacion)."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Objetivo general</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".nl2br($ObjGen)."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Objetivos específicos</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".nl2br($ObjEsp)."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Marco teórico</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>El archivo adjunto es: ".$fileNameMT."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Metodología</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".nl2br($metodologia)."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' colspan='3'>Resultados esperados</th>
    </tr>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%'>Tipo de producto</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%'>Detalle</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%'>Cantidad</th>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'  rowspan='5'>Generación de nuevo conocimiento</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' >Artículos de investigación</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$AI."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Libros de investigación</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$LI."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Capítulos de investigación</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$CI."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Productos tecnológicos patentados o en proceso</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$PTPP."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Variedades vegetales</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$VV."</td>
    </tr>

    <tr>
       <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'  rowspan='5'>Actividades de investigación, desarrollo e innovación</td>
       <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' >Productos tecnológicos certificados o validos</td>
       <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$PTCV."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Productos empresariales</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$PE."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Regulaciones, normas, reglamentos técnicos</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$RNRT."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Consultorías científicas y tecnológicas</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$CCT."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Innovación social</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$IS."</td>
    </tr>

    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'  rowspan='5'>Apropiación social del conocimento</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' >Participación ciudadana</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$PCiu."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Transferencia del conocimiento</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$TC."</td>
    </tr>
    <tr>
       <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Gestión del conocimento</td>
       <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$GC."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Comunicación del conocimiento</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$CC."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Circulación del conocimiento especializado</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$CCE."</td>
    </tr>

     <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'  rowspan='5'>Formación de recursos de formación</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;' >Tesis de doctorado</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$TDoc."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Tesis de maestría</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$TM."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Trabajos de grado</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$TG."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Proyectos de ID+i con formación</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$PIDF."</td>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Apoyo a programas de formación</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$APF."</td>
    </tr>
</table>
<br>
 <table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Contribución del proyecto al cumplimiento con la misión institucional</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$mision."</td>
    </tr>
</table>
<br>
 <table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Líneas del PIM con las qye vincula el proyecto</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$echoPIM."</td>
    </tr>
</table>
<br>
 <table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Acciones del Plan General de Desarrollo 2016-2019 con el que se articula el proyecto</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$PGD."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' colspan='5'>FODEIN</th>
    </tr>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Concepto</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Nombre</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Escalafón</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Horas mes</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Total ($)</th>
    </tr>
    <tr>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>Horas Nómina (Investigador Principal)</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$nombresIN."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$FEescalafon."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>".$FEHxMes."</td>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>$ ".$FETortl."</td>
    </tr>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' rowspan=".$rowspanCOI.">Horas Nómina (Co-Investigadores)</td>
        $echo3
</table>
 <br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%%'>Concepto</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%%'>Descripción</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%%'>Total ($)</th>
    </tr>
    $echo1
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Total FODEIN</th>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>$ ".$TFodein."</td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' colspan='5'>CONTRAPARTIDA EXTERNA</th>
    </tr>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Concepto</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Nombre</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Escalafón</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Horas mes</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Total</th>
    </tr>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' rowspan=".$rowspanInvesCE.">Horas Nómina</td>
        $echo4
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%%'>Concepto</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%%'>Descripción</th>
         <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='33.333%%'>Total</th>
    </tr>
    $echo5
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Total Contrapartida externa</th>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'>$ ".$TCE."</td>
    </tr>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>TOTAL PROYECTO</th>
        <td style='font-family:sans-serif;font-weight: 300;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; padding: 0.5rem;'><b>$ ".$TVPr."<b></td>
    </tr>
</table>
<br>
<table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' colspan='3'>CRONOGRAMA</th>
    </tr>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='60%'>Actividad</th>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Fecha Inicio</th>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;' width='20%'>Fecha Fin</th>
    </tr>
   $echo6
</table>
<br>
 <table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Posibles evaluadores</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$PEval."</td>
    </tr>
</table>
<br>
 <table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
        <th style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Referencia(s)</th>
    </tr>
    <tr>
        <td style='padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$ref."</td>
    </tr>
</table>
<br>
 <table class='tableMostrar' style='text-align: center; max-width: 1000px; width: 90%; margin: auto; border-collapse: collapse; font-family:sans-serif; background:#fff'>
    <tr>
        <th colspan='4' style='font-family:sans-serif;font-weight: 300;background: #F6F7F9;color: #525B6A;padding: 0.3rem; font-size: 0.9rem; border: 1px solid #ddd; background: #F6F7F9; padding: 0.5rem;'>Documentos adjuntos</th>
    </tr>
    <tr>
        <td style='width:33.33%;padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$fileNameCAP."</td>
        <td style='width:33.33%;padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$fileNameCACIP."</td>
        <td style='width:33.33%;padding: 0.5rem;background: #fff;word-wrap: break-word;border: 1px solid #ddd;text-align: justify;'>".$fileNameCAEE."</td>
    </tr>
</table>
    "; // El cuerpo de nuestro mensaje

    // Recorremos nuestro array de e-mails.

    foreach ($array as $correoCC) {
      $mail->AddAddress($correoCC); // Cargamos el e-mail destinatario a la clase PHPMailer
      $mail->Send(); // Realiza el envío =)
      $mail->ClearAddresses(); // Limpia los "Address" cargados previamente para volver a cargar uno.
    }

    echo "<script>window.location.replace('http://unidadinvestigacion.usta.edu.co/form-FODEIN/gracias.php');</script>";
    // header('Location: http://localhost/JohnAlexUSTA/FormularioUInvestigadores/FormularioUInvestigadoresV1.4/gracias.php');
   	echo "Se envio - Revisar correo";

?>