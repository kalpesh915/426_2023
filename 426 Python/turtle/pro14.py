import random
import turtle

window = turtle.Screen()
window.screensize(500, 500)
pen = turtle.Turtle()

pen.color("red")
pen.shape("turtle")
pen.speed(0.1)
colors = ["red", "blue", "purple", "pink", "yellow", "orange", "gray"]
width = 100
for x in range(1, 500):
    pen.backward(width)
    pen.left(122)
    rn = random.randint(0, 6)
    pen.color(colors[rn])
    if x %50 == 0:
        width+=30
turtle.done()