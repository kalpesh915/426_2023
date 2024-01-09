data = {"roll": 123, "fname" : "Jigar", "lname" : "Vaghela",
        "city" : "Rajkot", "married" : True}

print(data)
print(data["fname"])

data["phone"] = "7878789789"
print(data)

data["marks"] = 11, 22, 33, 44, 55
print(data)

del data["marks"]
print(data)

del data
print(data)