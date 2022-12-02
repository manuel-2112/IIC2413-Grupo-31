<h2>Crear nuevo Evento</h2>
<form action="consultas/agregar_evento.php" method="post">
    Nombre evento
    <input type = 'text' name = 'nombre'>
    Fecha de inicio:
    <input type = 'date' name = 'fecha_inicio'>
    Fecha de termino:
    <input type = 'date' name = 'fecha_termino'>
    Artista invitado:
    <input type = 'text' name = 'artista'>
    <button style="width:500px" type="submit" class="btn btn-outline-info btn-lg btn-block">Crear Evento</button>
</form>