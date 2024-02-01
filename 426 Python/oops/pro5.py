# example of default / non parametrized constructor
class Student:
    def __init__(self, roll, fname, lname):
        self.roll = roll
        self.fname = fname
        self.lname = lname

    def printer(self):
        print("Welcome",self.fname,self.lname,"your roll no. is",self.roll)

std = Student(111, "Kairavi", "Parsana") # instance / Object
std.printer()
std1 = Student(112, "Ashita", "Gohel") # instance / Object
std1.printer()
std2 = Student(113, "Ganga", "Khatri") # instance / Object
std2.printer()