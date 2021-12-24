-- Realizar una consulta que permita conocer cuál es el producto que más stock tiene.
select * from productos order by stock desc limit 1; 


-- Realizar una consulta que permita conocer cuál es el producto más vendido.
select p.* from productos p 
inner join ventas v on p.id = v.idproducto
group by p.id order by sum(v.cantidad) desc limit 1; 