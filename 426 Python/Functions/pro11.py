def findMax(ip1 = 0, ip2 = 0 , ip3 = 0):
    if ip1 > ip2 and ip1 > ip3:
        ans = "ip1 "+str(ip1)
    elif ip2 > ip1 and ip2 > ip3:
        ans = "ip2 "+str(ip2)
    else:
        ans = "ip3 "+str(ip3)
    return ans

#print(findMax(11, 22, 33))
print(findMax(ip3=11, ip1=22, ip2=33))
#print(findMax(ip31=11, ip12=22, ip21=33))
