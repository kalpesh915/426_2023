class Demo:
    # __variable_name is considered as private variable in python
    __data = 100


d = Demo()
print(d.__data)