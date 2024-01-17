data = [11, 22, 33, 44, 55, 66, 77, 89, 98, 67, 65, 34]

def findOdd(x):
    return x%2 == 1

#ans = filter(lambda x: x%2==1, data)
ans = filter(findOdd, data)
print(list(ans))