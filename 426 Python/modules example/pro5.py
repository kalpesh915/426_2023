import os

print(os.access("file1.txt", os.R_OK))
print(os.access("file1.txt", os.W_OK))
print(os.access("file1.txt", os.X_OK))
print(os.access("file1.txt", os.F_OK))