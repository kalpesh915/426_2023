ip1 = int(input("Enter value for ip1 \t"))
ip2 = int(input("Enter value for ip2 \t"))

try:
    print("Division is ", (ip1 / ip2))
except:
    print("Something went wrong while divison performed")
else:
    print("Else block exexuted")
print("Program is Over")