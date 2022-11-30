CREATE OR REPLACE FUNCTION importar_usuario()

RETURNS void AS $$

DECLARE
  productora RECORD;
  artista RECORD;
  datos_productora RECORD;
  datos_artista RECORD;
  contraseña_generada VARCHAR(30);

BEGIN
  IF  EXISTS(SELECT FROM pg_tables WHERE tablename='Usuarios') THEN
  productora := TRUE;
  artista := TRUE;
  ELSE
  productora := NULL;
  artista := NULL;
	
  create table Usuarios(
	id SERIAL PRIMARY KEY,
	username varchar(30),
	tipo varchar(30),
	contraseña varchar(30));				
  END IF;


  IF productora IS NULL THEN
    FOR datos_productora IN (SELECT * FROM productoras)
    LOOP
      SELECT concat(left(datos_productora.nombre, floor(random()*10)::int), left(datos_productora.telefono, floor(random()*10)::int)) INTO contraseña_generada;
      INSERT INTO Usuarios (username, tipo, contraseña) VALUES (datos_productora.nombre, 'Productora', contraseña_generada);
    END LOOP;
  END IF;

    IF artista IS NULL THEN
    FOR datos_artista IN (SELECT * FROM artistas)
    LOOP
      SELECT concat(left(datos_artista.nombre_escenico, floor(random()*10)::int), left(datos_artista.contacto, floor(random()*10)::int)) INTO contraseña_generada;
      INSERT INTO Usuarios (username, tipo, contraseña) VALUES (datos_artista.nombre_escenico, 'Artista', contraseña_generada);
    END LOOP;
  END IF;

END 
$$ language plpgsql