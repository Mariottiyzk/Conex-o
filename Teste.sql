SELECT
                aluno.id,
                aluno.nome,
                aluno.email,
                aluno.id_curso,
                curso.nome AS curso
            FROM aluno
            LEFT JOIN curso
                ON curso.id = curso.idcurso
            ORDER BY aluno.id ASC;

            
SELECT
                usuario.id,
                usuario.nome,
                usuario.email,
                usuario.telefone,
                usuario.cpf,
                usuario.datanascimento,
                usuario.login,
                usuario.datacadastro,
                usuario.dataultimoacesso,
                tipousuario.descricao AS tipousuario
            FROM usuario
            LEFT JOIN tipousuario
                ON tipousuario.id = usuario.id_tipousuario
            ORDER BY usuario.id ASC            