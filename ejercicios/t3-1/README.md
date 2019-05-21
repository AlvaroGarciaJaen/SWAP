Buscar con qué órdenes de terminal o herramientas podemos configurar bajo
Windows y bajo Linux el enrutamiento del tráfico de un servidor para pasar el
tráfico desde una subred a otra.o

# Solución

## Linux
Para hacerlo en Linux podemos hacerlo mediante la herramienta _ip_. Ejecutando
lo siguiente
```bash
ip route
```

Podemos ver las rutas que tiene nuestro ordenador o servidor almacenadas. Pero
no solo eso, también podemos añadir nuevas:
```bash
ip route add 192.168.1.0/24 dev eth0
```

Esto por ejemplo enrutaría el tráfico hacia la red 192.168.1.0/24 mediante la
interfaz _eth0_.

## Windows
En Windows también es bastante sencillo. Abrimos una terminal y escribimos lo
siguiente:
```
route print
```

Con esto veríamos las rutas estáticas que tiene el ordenador en este momento.
Para añadir una nueva lo haríamos con el siguiente comando:
```
route ADD 192.168.1.0 MASK 255.255.255.0 192.168.1.1
```

Esto por ejemplo pondría el dispositivo 192.168.1.1 como el default gateway de
la red 192.168.1.0/24.
