def greetings(data, name):
    data = data + name
    print("Data in Function ",data)


""" there is no effect on our original string becaus our string is immutale 
in nature of python scripting language"""
data = "Welcome"
print(data)
greetings(data, "Hemang")
print(data)