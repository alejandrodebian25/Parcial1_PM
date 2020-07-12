
/* AUX1 */
/* op2 inerr join 3 tablas  APROBADOS POR MATERIA*/
SELECT id_lugar_res,nota_final,sigla
FROM identificador 
INNER JOIN notas ON identificador.id=notas.id_identificador
INNER JOIN materia ON notas.id_materia=materia.id
WHERE nota_final>51 and sigla="INF-314"

/* RESPUEESTA */

SELECT 
sum(case when id_lugar_res =1 then 1 ELSE 0 END) AS LaPaz,
sum(case when id_lugar_res =2 then 1 ELSE 0 END) AS Cochabamba,
sum(case when id_lugar_res =3 then 1 ELSE 0 END) AS SantaCruz,
sum(case when id_lugar_res =4 then 1 ELSE 0 END) AS Oruro,
sum(case when id_lugar_res =5 then 1 ELSE 0 END) AS Chuquisaca,
sum(case when id_lugar_res =6 then 1 ELSE 0 END) AS Beni,
sum(case when id_lugar_res =7 then 1 ELSE 0 END) AS Pando,
sum(case when id_lugar_res =8 then 1 ELSE 0 END) AS Potosi,
sum(case when id_lugar_res =9 then 1 ELSE 0 END) AS Tarija
FROM identificador 
INNER JOIN notas ON identificador.id=notas.id_identificador
INNER JOIN materia ON notas.id_materia=materia.id
WHERE nota_final>51 and sigla="INF-314"
