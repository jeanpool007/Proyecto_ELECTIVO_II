<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Compras</title>
<link href="css/estilo.css" rel="stylesheet">
<script src="js/jquery_1.js"></script>
<script src="js/myjava.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <HR align="CENTER" size="2" width="400" noshade>
    <div align="CENTER"><font size="4" color="blue">Libros Electronicos</font></div>
    <HR align="CENTER" size="3" width="500" color="Red" noshade>
    <ul class="nav nav-pills nav-justified">
<!--    <li><img src="usp.png" width="50" height="50"></li>-->
        <li><a href="index.php"><img src="usp.png" width="50" height="50">Inicio</a></li>
   <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="compra.png" width="50" height="50">
        Compra<span class="caret"></span>
      </a>
   
        <ul class="dropdown-menu">
            <li><a href="">Registrar Compras</a></li>
            <li><a href="">Listas de las Compras</a></li>
      </ul>
    </li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="venta.png" width="50" height="50">
        Venta <span class="caret"></span>
      </a>
   
        <ul class="dropdown-menu">
            <li><a href="">Registrar Ventas</a></li>
            <li><a href="">Listar Ventas</a></li>
      </ul>
    </li>
    <header>LISTA DE COMPRAS </header>
    <section>
    <table border="0" align="center">
    	<tr>
            <td width="335"><input type="text" placeholder="Busca mediante Nombre" id="bs-prod-compra"/></td>
            <td><input type="date" id="bd-desde"/></td>
            <td>Hasta&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" id="bd-hasta"/></td>
<!--            <td width="100"><button id="nuevo-producto" class="btn btn-primary">Nuevo</button></td>-->
<!--            <td width="200"><a target="_blank" href="javascript:reportePDF();" class="btn btn-danger">Exportar Busqueda a PDF</a></td>-->
        </tr>
    </table>
    </section>
    <div class="registros" id="agrega-registros"></div>
    <center>
    </center>
     <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>  
      

</body>
</html>