SELECT * FROM `cartas`
WHERE `CRT_NOMBRE` LIKE '%Dark r%'


UPDATE cartas
SET `CRT_IMAGEN` = CONCAT('http://magiccards.info/scans/en/',LOWER(EDN_COD_INTERNO),'/',CRT_NUMERO_EDICION,'.jpg') 



INSERT INTO `ediciones` (
`EDN_NOMBRE`
,`EDN_COD_INTERNO`
)
SELECT CRT_EDICION
, `EDN_COD_INTERNO`
FROM cartas 
GROUP BY CRT_EDICION

