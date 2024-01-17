data = [11, 14, 15, 18, 19, 22, 13, 24, 23, 15, 18]

def findMore18(age):
    if age >= 18:
        return age


ans = filter(findMore18, data)

print(ans)
print(list(ans))