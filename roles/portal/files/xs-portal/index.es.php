<!DOCTYPE html>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require 'incl/service_list.php'; ?>
<link rel="stylesheet" type="text/css" media="all" href="xs-portal.css" />
<HTML>
<HEAD>

<TITLE>Bienvenido al servidor de la escuela</TITLE>

</HEAD>
<BODY>

<div id="wrapper">	
<h1>Bienvenido al servidor de la escuela</h1>
<?php require 'incl/banner.html'; ?>

<div id="main"> 
		
<br><h2>Cosas interesantes que puedes hacer aquí:</h2>

<div class="xsMenuHeading">
	<img src="/common/images/220px-Wikipedia-logo-v2.svg.png">
	<h2>Contenido en español disponible</h2>
</div>

<!-- <h2>Contenido en español de Kiwix</h2>-->

<!--1-->
<?php kiwix_link("wikipedia_es_all_2015-10", "Wikipedia-ES", "La enciclopedia libre en español"); ?>

<!--2-->
<?php kiwix_link("vikidia_es_all_2015-11", "Vikidia", "Enciclopedia adaptada a una forma simple de descripción, para que sea mejor entendido por niños y jóvenes."); ?>
<!--3-->
<?php kiwix_link("wikibooks_es_all_2015-11", "Wikilibros", "La colección de libros de texto y manuales libre que ¡todos pueden editar!"); ?>

<!--4-->
<?php kiwix_link("wikinews_es_all_2015-11", "Wikinoticias", "La fuente de noticias libres en la que todos pueden ser reporteros."); ?>

<!--5-->
<?php kiwix_link("wikiquote_es_all_2015-11", "Wikiquote", "La colección de citas donde tú puedes colaborar."); ?>

<!--6-->
<?php kiwix_link("wikisource_es_all_2015-11", "Wikisource", "La biblioteca que todos pueden editar con 112 044 artículos en español"); ?>

<!--7-->
<?php kiwix_link("wikiversity_es_all_2015-11", "Wikiversidad", "La wiki de contenido académico libre que todos pueden editar"); ?>

<!--8-->
<?php kiwix_link("wikivoyage_es_all_2015-11", "Wikiviajes", "La guía libre para viajar por el mundo que cualquiera puede editar."); ?>

<!--9-->
<?php kiwix_link("wiktionary_es_all_2015-10", "Wikcionario", "El diccionario libre que todos pueden editar"); ?>

<!--10-->
<?php hard_link("/rachel", "RACHEL", "Remote Area Community Hotspot for Education and Learning: best free materials from the Internet!","/library/rachel/www"); ?>

<!--11-->
<?php kiwix_link("gutenberg_es_all_10_2014", "Project Gutenberg", "Collection of English classic literature."); ?>

<div class="xsMenuHeading">
	<img src="/common/images/ted-talks-logo-150x150.jpg">
	<h2>Videoconferencias de Tecnología, Entretenimiento y Diseño.</h2>
</div>

<?php kiwix_link("ted_en_business_2015-02", "Business"); ?>

<?php kiwix_link("ted_en_design_2015-02", "Design"); ?>

<?php kiwix_link("ted_en_entertainment_2015-02", "Entertainment"); ?>
<BR>

<?php kiwix_link("ted_en_global_issues_2015-02", "Global Issue"); ?>

<?php kiwix_link("ted_en_science_2015-02", "Science"); ?>

<?php kiwix_link("ted_en_technology_2015-02", "Technology"); ?>
<BR><BR>

<div class="xsMenuHeading">
	<img src="/common/images/khan-logo-vertical-transparent.png">
	<h2>Khan Academy</h2>
</div>

<?php kalite_link("KA Lite", "Versión Offline de la plataforma Khan Academy."); ?>

<div class="xsMenuHeading">
	<img src="/common/images/osm.jpg">
	<h2>Maps</h2>
</div>

<?php hard_link("/iiab/static/map.html", "OpenStreetMap", "Mapa mundial desde Internet-in-a-Box","/library/knowledge/modules/openstreetmap/mod_tile64"); ?>

<h2>Herramientas de colaboración</h2>

<?php hard_link("/owncloud", "ownCloud", "Offline file sharing, calendaring, and collaboration for teachers especially.", "/opt/owncloud/index.php"); ?>

<?php hard_link("/elgg", "Elgg", "Offline social media for students especially.", "/opt/elgg/index.php"); ?>

<?php hard_link("/content", "Acceso Otros Contenidos", "TestPrep PDFs and a growing  list of documents.","/library/content"); ?>

<?php hard_link("/content", "Acceso Otros Contenidos", "Ponga el contenido adicional en /library/content y los subdirectorios y enlace a ella con esta función, como syans en Haití."); ?>

<?php service_link("iiab", "Internet In A Box", "Internet-in-a-Box es una copia de una parte del material más importante en Internet, como la Wikipedia, almacenado localmente en el servidor XS desde donde se puede acceder con facilidad."); ?>

<?php service_link("moodle", "Moodle Home Page", "Moodle es una colección de clases y materiales de estudio organizados para ayudarle a aprender muchas cosas fascinantes."); ?>

<?php service_link("upload", "Cargar archivos", "Desde este enlace puedes cargar varios archivos, como imágenes y actividades"); ?>

<?php service_link("activity-server", "Descargar una Actividad", "Puedes añadir una nueva actividad a su XO desde este enlace."); ?>

<h2>Herramientas para Administradores</h2>

<?php xovis_link("XOvis", "Estadísticas sobre el uso de las activades en las XO."); ?>

<?php hard_link("/munin", "Munin", "Monitoreo sobre el rendimiento del servidor XS."); ?>

<?php hard_link("/admin", "Admin Console", "Interfaz gráfica para configurar el servidor XS.", "/opt/schoolserver/admin_console"); ?>

<h2>Contraseñas temporales</h2>
<ul>
	<li>KA Lite: Admin/changeme</li>
	<li>ownCloud: Admin/changeme</li>
	<li>Elgg: Admin/changeme</li>
	<li>Munin: admin/munindxs</li>
	<li>Admin Console: x<a href="/software" target="_blank">s</a>ce-admin</li>
</ul>

<BR> Disfrute explorando!
</div><!-- #main -->
</div><!-- #wrapper -->
</BODY>
<script type="text/javascript" src="incl/xs-portal.js"></script>
</HTML>
