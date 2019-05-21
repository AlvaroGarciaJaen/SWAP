Calcular la disponibilidad del sistema si tenemos dos réplicas de cada elemento
(en total 3 elementos en cada subsistema).

Componente - Disponibilidad
Web - 85%
Aplicación - 90%
Base de datos - 99.9%
DNS - 98%
Firewall - 85%
Switch - 99%
Centro de datos - 99.99%
ISP - 95%

Para calcular esto, podemos aplicar a cada componente la siguiente función:
```python
#!/usr/bin/python3

def calc_avail(p):
    second = p/100 + (1-p/100) * p/100
    third = second + (1-second) * p/100
    return third*100

print(calc_avail(85.0))
print(calc_avail(90.0))
print(calc_avail(99.9))
print(calc_avail(98.0))
print(calc_avail(85.0))
print(calc_avail(99.0))
print(calc_avail(99.99))
print(calc_avail(95.0))
```
Resultados:

- 99.6625%
- 99.9%
- 99.9999999%
- 99.9992%
- 99.6625%
- 99.9999%
- 99.9999999999%
- 99.9875%

Total:
```
Disponibiliad = 99.6625%%*99.9%*99.9999999%*99.9992%*99.6625%*99.9999%*99.9999999999%*99.9875% = 99.21351654361693%
```
