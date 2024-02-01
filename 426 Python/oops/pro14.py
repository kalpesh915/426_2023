class ParentClass:
    pass

class ChildClass(ParentClass):
    pass


print(issubclass(ChildClass, ParentClass))