class Demo:
    # __variable_name is considered as private variable in python
    __data = 100

    def getData(self):
        print("Value of Data is ", self.__data)

    def setData(self, value):
        self.__data = value

d = Demo()
d.getData()
d.setData(111)
d.getData()