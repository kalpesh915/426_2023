import turtle

window = turtle.Screen()
window.screensize(500, 500)
pen = turtle.Turtle()
#pen.goto(200, 200)
for x in range(1, 50):
    pen.down()
    if x %10 == 0:
        pen.up()
    pen.backward(200)
    pen.left(170)
turtle.done()