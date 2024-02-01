import os

filename = 'python.txt'
try:
    file1 = open(filename, 'r')
    data = file1.read()
    file1.close()
except IOError as err:
    print("Error is ",err)