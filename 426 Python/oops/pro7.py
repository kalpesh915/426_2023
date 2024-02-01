class Demo:
    count = 0
    def __init__(self):
        Demo.count = Demo.count + 1


print(Demo.count)
obj1 = Demo()
obj1 = Demo()
obj1 = Demo()
print(Demo.count)