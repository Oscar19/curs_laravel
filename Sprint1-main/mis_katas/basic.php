<?php 
   
/*
{
    "Nom": "proveirsa",
    "Adreça": {
        "Carrer": "Gelabert",
        "Núm" : 42,
        "Pis" : "5-2",
        "Porta" : "a",
        "Ciutat" : "Barcelona",
        "Codi postal" : 08029,
        "Pais" : "Spain"
    },
    "Telefon" : "+0046059391",
    "Fax" : "+4568754+64",
    "Nif" : "46059391m"
}
{
    "marca": "Rayban",
    "graduacio" : {
        "vidre_esquerra" : 0.2,
        "vidre_dret" : 0.1
    },
        "montura" : "Pasta",
        "color_vidre" : "blau",
        "Preu" : 199.00
}
{
    "Nom" : "Oscar",
    "Adreça" : "Gelaber 42",
    "Telefon" : "654789645",
    "Email" : "elmio@elmio.com",
    "Data registre" : new Date(2020, 02, 10),
    "Recomanat_id" : ObjectId()
}

{
    "Nom" : "Sergio",
    "Adreça" : "trabajo 22",
    "Telefon" : "45685",
    "Email" : "elmio@elmio.com",
    "Data registre" : new Date(2020, 01, 15),
}

{
    "Nom" : "Jaime",
    "Data venda" : new Date(2024, 02, 25),
}
*/


/*       Exemple 1    
client    

{
    "_id": "ObjectId",
    "nombre": " ",
    "direccion": {
        "calle": " ",
        "numero": " ",
        "piso": " ",
        "puerta": " ",
        "ciudad": " ",
        "codigo_postal": " ",
        "pais": " "
    },
    "telefono": " ",
    "email": " ",
    "fecha_registro": "",
    "recomendado_id": "ObjectId"  
}

gafas
{
    "_id": "ObjectId",
    "marca": " ",
    "graduacion": {
        "izquierda": " ",
        "derecha": " "
    },
    "montura": " ",
    "color": " ",
    "color_cristal": {
        "izquierda": " ",
        "derecha": " "
    },
    "precio": " ",
    "proveedor_id": "ObjectId"  
}

ventas
{
    "_id": "ObjectId",
    "cliente_id": "ObjectId",  
    "empleado_id": "ObjectId",  
    "gafas_pedido": [
        {
            "gafas_id": "ObjectId",
            "cantidad": " ",
            "precio": " "
        }
    ],
    "fecha_venta": " ",  
    "precio": " "  
}
empleados

{
    "_id": ObjectId,
    "nombre": " ",
    "contacto": {
        "telefono": " ",
        "email": " "
    }
}


proveedores
{
    "_id": ObjectId,
    "nombre": String,
     "direccion": {
        "calle": " ",
        "numero": " ",
        "piso": " ",
        "puerta": " ",
        "ciudad": " ",
        "codigo_postal": " ",
        "pais": " "
    },
    "telefono": " ",
    "fax": " ",
    "nif": " "
}

----------------------------------------------------------

gafas

{
    "_id": "ObjectId",
    "marca": " ",
    "graduacion": {
        "izquierda": " ",
        "derecha": " "
    },
    "montura": " ",
    "color": " ",
    "color_cristal": {
        "izquierda": " ",
        "derecha": " "
    },
    "precio": " ",
    "proveedor_id": "ObjectId"  
}

proveedor

{
    "_id": ObjectId,
    "nombre": " ",
     "direccion": {
        "calle": " ",
        "numero": " ",
        "piso": " ",
        "puerta": " ",
        "ciudad": " ",
        "codigo_postal": " ",
        "pais": " "
    },
    "telefono": " ",
    "fax": " ",
    "nif": " "
}

ventas

{
    "_id": "ObjectId",
    "gafas_id": "ObjectId",
    "cliente_id": "ObjectId",
    "empleado_id": "ObjectId",
    "fecha_venta": " ",
    "precio": " "
}
clientes
{
    "_id": "ObjectId",
    "nombre": " ",
    "direccion": {
        "calle": " ",
        "numero": " ",
        "piso": " ",
        "puerta": " ",
        "ciudad": " ",
        "codigo_postal": " ",
        "pais": " "
    },
    "telefono": " ",
    "email": " ",
    "fecha_registro": "",
    "recomendado_id": "ObjectId"  
}

empleados

{
    "_id": "ObjectId",
    "nombre": " ",
    "contacto": {
        "telefono": " ",
        "email": " "
    }
}
*/
?>