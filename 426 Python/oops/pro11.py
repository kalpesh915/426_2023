import turtle

turtle1 = turtle.Turtle()

for x in range(1, 100):
    turtle1.left(150)
    turtle1.forward(x * 5)

turtle1.done()