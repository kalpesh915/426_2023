class Demo:
    count = 0
    def __init__(self):
        self.count += 1


print(Demo.count)
obj1 = Demo()
obj1 = Demo()
obj1 = Demo()
print(Demo.count)