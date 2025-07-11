
/*1*/select nombre from tienda.producto;
/*2*/select nombre, precio from tienda.producto;
/*3*/select * from tienda.producto;
/*4*/SELECT nombre, precio, precio * 0.92 FROM producto;
/*5*/SELECT nombre, precio AS "Euros", precio * 0.92 AS "Dollars" FROM producto;
/*6*/SELECT UPPER(nombre) as "Nombre", precio from producto;
/*7*/SELECT LOWER(nombre) as "Nombre", precio from producto;
/*8*/SELECT nombre, left(UPPER(nombre), 2) as "Pref." from fabricante;
/*9*/SELECT nombre, truncate(precio, 1) as "Precio 1 decimal" from producto;
/*10*/SELECT nombre, ROUND(precio) as "Precio redondeado" from producto;
/*11*/SELECT codigo_fabricante FROM producto;
/*12*/SELECT DISTINCT fabricante.codigo FROM fabricante JOIN producto ON fabricante.codigo = producto.codigo_fabricante;
/*13*/SELECT nombre FROM fabricante ORDER BY nombre ASC;
/*14*/SELECT nombre FROM fabricante ORDER BY nombre DESC;
/*15*/SELECT nombre FROM producto ORDER BY nombre ASC, precio DESC;
/*16*/SELECT * FROM fabricante LIMIT 5;
/*17*/SELECT * FROM fabricante LIMIT 2 OFFSET 3;
/*18*/SELECT nombre, precio FROM producto ORDER BY precio ASC LIMIT 1;
/*19*/SELECT nombre, precio FROM producto ORDER BY precio DESC LIMIT 1
/*20*/SELECT nombre FROM producto WHERE codigo_fabricante = 2;
/*21*/SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante;
/*22*/SELECT producto.nombre, producto.precio, fabricante.nombre FROM producto JOIN fabricante ORDER BY fabricante.nombre;
/*23*/SELECT producto.codigo, producto.nombre, producto.codigo_fabricante, fabricante.nombre from producto join fabricante on producto.codigo_fabricante = fabricante.codigo;
/*24*/SELECT producto.nombre, producto.precio, fabricante.nombre from producto join fabricante on producto.codigo_fabricante = fabricante.codigo order by precio asc limit 1;
/*25*/SELECT producto.nombre, producto.precio, fabricante.nombre from producto join fabricante on producto.codigo_fabricante = fabricante.codigo order by precio desc limit 1;
/*26*/SELECT * from producto join fabricante on producto.codigo_fabricante = fabricante.codigo where fabricante.nombre like "Lenovo";
/*27*/SELECT * from producto join fabricante on producto.codigo_fabricante = fabricante.codigo where fabricante.nombre like "Crucial" and precio >=200;
/*28*/SELECT * from producto join fabricante on producto.codigo_fabricante = fabricante.codigo where fabricante.nombre = "Asus" or fabricante.nombre = "Hewlett-Packard" or fabricante.nombre = "Seagate";
/*29*/SELECT * from producto join fabricante on producto.codigo_fabricante = fabricante.codigo where fabricante.nombre in ("Asus", "Hewlett-Packard", "Seagate");
/*30*/SELECT producto.nombre, producto.precio, fabricante.nombre from producto join fabricante on producto.codigo_fabricante = fabricante.codigo where fabricante.nombre like "%e";
/*31*/SELECT producto.nombre, producto.precio, fabricante.nombre from producto join fabricante on producto.codigo_fabricante = fabricante.codigo where fabricante.nombre like "%w%";
/*32*/SELECT producto.nombre, producto.precio, fabricante.nombre from producto join fabricante on producto.codigo_fabricante = fabricante.codigo where precio >=180 order by producto.precio desc, producto.nombre asc;
/*33*/SELECT DISTINCT fabricante.codigo, fabricante.nombre from fabricante join producto on producto.codigo_fabricante = fabricante.codigo;
/*34*/SELECT * FROM fabricante LEFT JOIN producto ON fabricante.codigo = producto.codigo_fabricante;
/*35*/SELECT * FROM fabricante LEFT JOIN producto ON fabricante.codigo = producto.codigo_fabricante where producto.codigo_fabricante IS NULL;
/*36*/SELECT * from producto LEFT JOIN fabricante on fabricante.nombre LIKE "Lenovo";
/*37*/
/*38*/SELECT * from producto LEFT JOIN fabricante ON fabricante.nombre LIKE "Lenovo" where producto.precio = (SELECT MAX(precio)from producto);
/*39*/SELECT * from producto LEFT JOIN fabricante ON fabricante.nombre LIKE "Hewlett-Packard" where producto.precio = (SELECT MIN(precio)from producto);
/*40*/
