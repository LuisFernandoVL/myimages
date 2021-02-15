CREATE SEQUENCE usuario_id_usuario_seq   -- objeto sequence para gerar campo autoincremento
START 1
MINVALUE 1
MAXVALUE 9223372036854775807
CACHE 1;
   
CREATE TABLE usuario(
      id_usuario 		INT8 NOT NULL DEFAULT NEXTVAL('usuario_id_usuario_seq'),   -- campo identity  autoincremento
      apelido			VARCHAR(32) NOT NULL,
      nome			VARCHAR(48) NOT NULL,
      email			VARCHAR(48) NOT NULL,
      senha			VARCHAR(16) NOT NULL,
      CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario)
);
 
CREATE SEQUENCE imagem_id_imagem_seq
START 1
MINVALUE 1
MAXVALUE 9223372036854775807
CACHE 1;
   
CREATE TABLE imagem(
      id_imagem 		INT8 NOT NULL DEFAULT NEXTVAL('imagem_id_imagem_seq'),
      id_usuario	 	INT8 NOT NULL,
      imagem			VARCHAR(32) NOT NULL,
      titulo			VARCHAR(32) NOT NULL,
      descricao		VARCHAR(150) NOT NULL,
      autor			VARCHAR(32) NOT NULL,
      datahorapost		VARCHAR(16) NOT NULL,    -- tipo data/hora
     
      CONSTRAINT imagem_pkey PRIMARY KEY (id_imagem),
      CONSTRAINT imagem_idusuario_fkey
		FOREIGN KEY (id_usuario) 
      	REFERENCES usuario (id_usuario)
);