import turtle

window = turtle.Screen()
window.screensize(500, 500)
pen = turtle.Turtle()

pen.color("red")

pen.width(5)
pen.begin_fill()
pen.fillcolor("yellow")
for x in range(1, 6):

    pen.backward(200)
    pen.left(144)
pen.end_fill()
turtle.done()