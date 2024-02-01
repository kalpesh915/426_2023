# Method Overriding

class Animal:
    def Speaking(self):
        print("Animal is Speaking")

class Dog(Animal):
    def Speaking(self):
        print("Barking")

class Cat(Animal):
    def Speaking(self):
        print("Meow Meow")

class Kairavi(Animal):
    def Speaking(self):
        print("Khi Khi Khu Khu")

cat = Cat()
cat.Speaking()
kairavi = Kairavi()
kairavi.Speaking()