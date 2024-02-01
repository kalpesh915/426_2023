ip1 = int(input("Enter value for ip1 \t"))
ip2 = int(input("Enter value for ip2 \t"))

try:
    print("Division is ", (ip11 / ip2))
except (ZeroDivisionError, NameError) as err:
    print("Error is", err)
else:
    print("Else block exexuted")
print("Program is Over")