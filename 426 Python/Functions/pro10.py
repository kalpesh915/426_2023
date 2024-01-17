def findMax(ip1 = 0, ip2 = 0 , ip3 = 0):
    if ip1 > ip2 and ip1 > ip3:
        ans = ip1
    elif ip2 > ip1 and ip2 > ip3:
        ans = ip2
    else:
        ans = ip3
    return ans



#print(findMax(11, 22, 33))
#print(findMax(11, 22, 33, 44))
#print(findMax(11, 22))
#print(findMax(11))
#print(findMax())
