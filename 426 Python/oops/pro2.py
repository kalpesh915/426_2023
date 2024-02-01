class Demo:
    __doc__ = """ self keyword is used as this keyword in other languages"""
    def msg(self):
        print("Welcome")

print(Demo.__doc__)