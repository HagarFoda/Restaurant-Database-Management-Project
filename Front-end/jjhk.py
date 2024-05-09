import turtle
import threading

def circle():
    
    turtle.begin_fill()
    turtle.circle(50)
    turtle.end_fill()


def rectangle():
    
    turtle.begin_fill()
    turtle.forward(100)
    turtle.left(90)
    turtle.forward(50)
    turtle.left(90)
    turtle.forward(100)
    turtle.left(90)
    turtle.forward(50)
    turtle.end_fill()

# Create two threads, one for drawing the circle and one for drawing the rectangle
c = threading.Thread(target=circle)
r = threading.Thread(target=rectangle)

# Start both threads
c.start()
r.start()

# Wait for both threads to finish
c.join()
r.join()

# Keep the turtle window open until it is clicked
turtle.done()