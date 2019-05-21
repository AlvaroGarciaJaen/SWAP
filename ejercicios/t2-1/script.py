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
