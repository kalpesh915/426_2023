# count how many digits in number

ip1 = int(input("Enter any number \t"))
count = 0
while ip1 > 0:
    count += 1
    #ip1 /= 10 #never use this
    #ip1 //= 10 # use this floor div
    ip1 = int(ip1 / 10) # use this 

print("Answer is ",count)
