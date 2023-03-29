import math


d = str("null")
pi = math.pi
d = (input())

print("a")

try:
d = float(d)
except:
    r = d/2
    a = pi * (r ** 2)
    c = 2 * pi * r

    print("Radius = ", r)
    print("Area = ", a)
    print("Circumference = ", c)