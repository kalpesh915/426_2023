class Student:
    roll = 123
    fname = "Jigar"
    lname = "Vaghela"

    def printer(self):
        print("Welcome",self.fname,self.lname,"your roll no. is",self.roll)

std = Student() # instance / Object
std.printer()