Aplicar con iptables una política de denegar todo el tráfico en una de las
máquinas de prácticas.
Comprobar el funcionamiento.  

Aplicar con iptables una política de permitir todo el tráfico en una de las
máquinas de prácticas.
Comprobar el funcionamiento.  

# Solución
Pues bien, como esto ya lo expliqué bastante en profundidad en la práctica 4,
esta vez lo haré más por encima. Lo que queremos hacer es denegar todo. Usaremos
algo así:
```bash
#!/bin/bash

# Limpia la tabla
iptables -F
iptables -X
iptables -Z
iptables -t nat -F

# Prohíbe por defecto todo el tráfico
iptables -P INPUT DROP
iptables -P OUTPUT DROP
iptables -P FORWARD DROP
```

Ahora bien, si lo que queremos es simplemente que se acepte todo el tráfico,
deberemos usar el siguiente script:
```bash
#!/bin/bash

iptables -F
iptables -X
iptables -Z
iptables -t nat -F

iptables -P INPUT ACCEPT
iptables -P OUTPUT ACCEPT
iptables -P FORWARD ACCEPT

iptables -L -n -v
```
