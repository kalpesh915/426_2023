class Demo:
    ip1 = 10
    def printer(self):
        print(self.ip1)


obj = Demo()

print(obj.__doc__)
print(Demo.__dict__)
print(Demo.__name__)
print(Demo.__module__)
print(Demo.__bases__)