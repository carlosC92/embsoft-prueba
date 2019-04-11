SELECT empleado.nombre, empleado.antiguedad
FROM empleado
INNER JOIN departamento ON empleado.id_departamento=departamento.id
INNER JOIN empresa ON departamento.id_empresa=empresa.id
WHERE empresa.empresa = "Empresa B"

SELECT empleado.nombre, empleado.antiguedad, empresa.empresa
FROM empleado
INNER JOIN departamento ON empleado.id_departamento=departamento.id
INNER JOIN empresa ON departamento.id_empresa=empresa.id
WHERE empleado.antiguedad >= 2

SELECT DISTINCT nombre FROM departamento