import math

x = int(input("Enter Diameter, "))
pi = math.pi

r = x/2
a = pi * (r ** 2)
c = 2 * pi * r

print("Radius = ", r)
print("Area = ", a)
print("Circumference = ", c)