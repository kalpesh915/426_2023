def findMax(**data):
    if data["ip1"] > data["ip2"] and data["ip1"] > data["ip3"]:
        ans = data["ip1"]
    elif data["ip2"] > data["ip1"] and data["ip2"] > data["ip3"]:
        ans = data["ip2"]
    else:
        ans = data["ip3"]   
    return ans

print(findMax(ip1=10, ip2=20, ip3=30))