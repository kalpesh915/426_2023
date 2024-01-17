def FindMax(x, y, z):
    if x > y and x > z :
        ans = x
    elif y > x and y > z:
        ans = y
    else:
        ans = z
    return ans


print(FindMax(112, 123, 32))