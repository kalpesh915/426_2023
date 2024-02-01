class Demo:
    pass

obj = Demo()
print(hasattr(obj, "count"))
setattr(obj, "count", 10)
print(hasattr(obj, "count"))
print(getattr(obj, "count"))
delattr(obj, "count")
print(hasattr(obj, "count"))