# example of default / non parametrized constructor
class Student:
    def __init__(self):
        self.roll = 123
        self.fname = "Jigar"
        self.lname = "Vaghela"

    def printer(self):
        print("Welcome",self.fname,self.lname,"your roll no. is",self.roll)

std = Student() # instance / Object
std.printer()