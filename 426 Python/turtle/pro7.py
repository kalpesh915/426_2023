import turtle

window = turtle.Screen()
window.screensize(500, 500)
pen = turtle.Turtle()
#pen.goto(200, 200)
pen.color("Red")
for x in range(1, 50):
    pen.backward(200)
    pen.left(170)
turtle.done()