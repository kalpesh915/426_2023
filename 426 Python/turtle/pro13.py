import turtle

window = turtle.Screen()
window.screensize(500, 500)
pen = turtle.Turtle()

pen.color("red")
pen.shape("turtle")
pen.speed(0.1)
for x in range(1, 200):
    pen.backward(200)
    pen.left(122)
    pen.stamp()
turtle.done()