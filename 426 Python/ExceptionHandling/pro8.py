def division(ip1, ip2):
    if ip2 == 0:
        raise Exception("Division is Not Possible")
    else:
        print("Division is ",(ip1 / ip2))


try:
    ip1 = int(input("Enter any value for ip1 \t"))
    ip2 = int(input("Enter any value for ip2 \t"))
    division(ip1, ip2)
except Exception as err:
    print("Error is ",err)
finally:
    print("Program is Over")