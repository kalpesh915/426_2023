import turtle

window = turtle.Screen()
window.screensize(500, 500)
pen = turtle.Turtle()

pen.color("red")
pen.shape("turtle")
for x in range(1, 6):
    pen.backward(200)
    pen.left(144)
    pen.stamp()
turtle.done()