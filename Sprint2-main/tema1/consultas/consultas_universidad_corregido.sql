/*1*/SELECT apellido1, apellido2, nombre FROM persona WHERE tipo LIKE "alumno" order by apellido1 ASC, apellido2 ASC, nombre ASC;
/*2*/SELECT apellido1, apellido2, nombre FROM persona WHERE tipo LIKE "alumno" AND telefono is null;
/*3*/SELECT apellido1, apellido2, nombre FROM persona WHERE tipo LIKE "alumno" AND fecha_nacimiento LIKE "1999%";
/*4*/SELECT apellido1, apellido2, nombre FROM persona WHERE tipo LIKE "profesor" AND telefono is null AND nif LIKE "%K";
/*5*/SELECT * FROM asignatura WHERE cuatrimestre = 1 AND curso = 3 AND id_grado = 7;
/*6*/SELECT persona.apellido1, persona.apellido2, persona.nombre, departamento.nombre FROM persona JOIN profesor ON persona.id = profesor.id_profesor JOIN departamento ON profesor.id_departamento = departamento.id ORDER BY persona.apellido1, persona.apellido2, persona.nombre ASC;
/*7*/SELECT persona.nif, asignatura.nombre, curso_escolar.anyo_inicio, curso_escolar.anyo_fin FROM persona JOIN alumno_se_matricula_asignatura ON persona.id = alumno_se_matricula_asignatura.id_alumno JOIN curso_escolar ON alumno_se_matricula_asignatura.id_curso_escolar = curso_escolar.id JOIN asignatura ON alumno_se_matricula_asignatura.id_asignatura = asignatura.id WHERE persona.nif = '26902806M';
/*8 corregido*/SELECT DISTINCT departamento.nombre FROM grado INNER JOIN asignatura ON asignatura.id_grado = grado.id INNER JOIN profesor ON  profesor.id_profesor = asignatura.id_profesor INNER JOIN departamento ON departamento.id = profesor.id_departamento WHERE grado.id = "4";
/*9*/SELECT DISTINCT CONCAT(persona.nombre, ' ', persona.apellido1, ' ', persona.apellido2) AS "alumno/a", curso_escolar.anyo_inicio FROM persona JOIN alumno_se_matricula_asignatura ON persona.id = alumno_se_matricula_asignatura.id_alumno JOIN curso_escolar ON alumno_se_matricula_asignatura.id_curso_escolar = curso_escolar.id JOIN asignatura ON alumno_se_matricula_asignatura.id_asignatura = asignatura.id WHERE curso_escolar.anyo_inicio = 2018 AND curso_escolar.anyo_fin = 2019;

/*Left y right join*/
/*1 No hay ningún profesor sin departamento*/SELECT departamento.nombre, persona.apellido1, persona.apellido2, persona.nombre FROM departamento LEFT JOIN profesor ON departamento.id = profesor.id_departamento INNER JOIN persona ON persona.id = profesor.id_profesor ORDER BY departamento.nombre, persona.apellido1, persona.apellido2, persona.nombre;
/*2 No hay ningún profesor sin departamento*/SELECT persona.id, persona.nombre, persona.apellido1, persona.apellido2 ,profesor.id_departamentoFROM persona LEFT JOIN profesor ON persona.id = profesor.id_profesor WHERE profesor.id_departamento IS NULL AND persona.tipo = 'profesor';
/*3*/SELECT departamento.nombre FROM departamento LEFT JOIN profesor ON departamento.id = profesor.id_departamento WHERE profesor.id_profesor IS NULL;
/*4 Corregido*/SELECT persona.id, persona.nombre, persona.apellido1, persona.apellido2  FROM persona LEFT JOIN asignatura ON persona.id = asignatura.id_profesor WHERE asignatura.id_profesor IS NULL AND persona.tipo = 'profesor';
/*5*/SELECT asignatura.nombre AS Asignatura, profesor.id_profesor FROM asignatura LEFT JOIN profesor ON asignatura.id_profesor = profesor.id_profesor WHERE profesor.id_profesor IS NULL;
/*6*/SELECT DISTINCT departamento.nombre, asignatura.id FROM departamento LEFT JOIN profesor ON departamento.id = profesor.id_departamento LEFT JOIN asignatura ON profesor.id_profesor = asignatura.id_profesor WHERE asignatura.id IS NULL;


/*Resumen*/
/*1 Corregido*/SELECT count(id) As "Alumne" FROM persona where tipo like "alumno";
/*2 Corregido*/SELECT count(id) As "Alumne" FROM persona where tipo like "alumno" AND YEAR(fecha_nacimiento) = 1999;
/*3 Corregido*/SELECT departamento.nombre AS "Departament", COUNT(profesor.id_profesor) AS "Profesores asociats" FROM departamento RIGHT JOIN profesor ON departamento.id = profesor.id_departamento GROUP BY departamento.nombre  ORDER BY COUNT(profesor.id_profesor) DESC;
/*4*/SELECT departamento.nombre AS "Departament", COUNT(profesor.id_profesor) AS "Número professors" FROM departamento LEFT JOIN profesor ON departamento.id = profesor.id_departamento GROUP BY departamento.nombre  ORDER BY "Número professors" DESC;
/*5 Corregido*/ SELECT grado.nombre AS "Grau", COUNT(asignatura.id) AS "Asignatures" FROM grado  LEFT JOIN asignatura ON grado.id = asignatura.id_grado GROUP BY grado.nombre ORDER BY COUNT(asignatura.id_grado) DESC;
/*6*/ SELECT grado.nombre AS "Grau", COUNT(asignatura.id) AS "Asignatures" FROM grado  LEFT JOIN asignatura ON grado.id = asignatura.id_grado GROUP BY grado.nombre HAVING "Asignatures" > 40 ORDER BY "Asignatures" DESC;
/*7*/ SELECT grado.nombre AS "Grau", asignatura.tipo, SUM(asignatura.creditos) AS "Credits" FROM grado LEFT JOIN asignatura ON grado.id = asignatura.id_grado GROUP BY grado.nombre, asignatura.tipo;
/*8*/ SELECT curso_escolar.anyo_inicio, COUNT(DISTINCT alumno_se_matricula_asignatura.id_alumno) AS "Alumnes matriculats" FROM curso_escolar LEFT JOIN alumno_se_matricula_asignatura ON curso_escolar.id = alumno_se_matricula_asignatura.id_curso_escolar GROUP BY curso_escolar.anyo_inicio;
/*9 Corregido*/ SELECT profesor.id_profesor, persona.nombre, persona.apellido1, persona.apellido2, COUNT(asignatura.id) AS "Asignatures"  FROM profesor INNER JOIN persona ON profesor.id_profesor = persona.id LEFT JOIN asignatura ON profesor.id_profesor = asignatura.id_profesor GROUP BY profesor.id_profesor ORDER BY COUNT(asignatura.id_profesor) DESC;

