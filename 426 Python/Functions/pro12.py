def findMax(*data):
    ans=0
    for x in data:
        if x > ans:
            ans = x

    print("Maximum is ",ans)


findMax(12, 33)
findMax(12, 33, 56)
findMax(12, 33, 56, 78)
findMax(12, 33, 56, 78, 76)
findMax(12, 33, 56, 78, 76, 65)
findMax(12, 33, 56, 78, 76, 65, 89)
