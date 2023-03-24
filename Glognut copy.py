import math


d = str("null")
pi = math.pi

print("a")

while isinstance(d, str) is True:
    d = (input())
#if d.isnumeric():
else:
    r = d/2
    a = pi * (r ** 2)
    c = 2 * pi * r

    print("Radius = ", r)
    print("Area = ", a)
    print("Circumference = ", c)