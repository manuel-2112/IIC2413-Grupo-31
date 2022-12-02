CREATE OR REPLACE FUNCTION insertar_productora(username_productora TEXT, contrasena_productora TEXT, tipo_productora TEXT)

RETURNS void AS $$

BEGIN    
  INSERT INTO usuarios (username, contrasena, tipo) VALUES (username_productora, contrasena_productora, tipo_productora);
END
$$ language plpgsql