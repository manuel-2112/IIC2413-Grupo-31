CREATE OR REPLACE FUNCTION importar_usuario()

RETURNS void AS $$

DECLARE
  productora RECORD;
  --artista RECORD;
  datos_productora RECORD;
  --datos_artista RECORD;
  username_productora VARCHAR(100);
  contrasena_generada VARCHAR(30);

BEGIN
  DROP TABLE IF EXISTS usuarios;
  CREATE TABLE IF NOT EXISTS usuarios (
    id SERIAL PRIMARY KEY,
    username varchar(100),
    contrasena varchar(30),
    tipo varchar(30));

    FOR datos_productora IN (SELECT * FROM productoras)
    LOOP
      SELECT lower(datos_productora.nombre) INTO username_productora;
      SELECT REPLACE(username_productora, ' ', '_') INTO username_productora;
      SELECT floor(random()* (999999-100000 + 1) + 100000) INTO contrasena_generada;
      INSERT INTO usuarios (username, contrasena, tipo) VALUES (username_productora, contrasena_generada, 'Productora');
    END LOOP;

    --FOR datos_artista IN (SELECT * FROM artistas)
    --LOOP
    --  SELECT floor(random()* (999999-100000 + 1) + 100000) INTO contrasena_generada;
    --  INSERT INTO usuarios (username, contrasena, tipo) VALUES (datos_artista.nombre_escenico, contrasena_generada, 'Artista');
    --END LOOP;

END 
$$ language plpgsql