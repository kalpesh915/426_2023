data = "welcome to python"

print(data)
bytesofData = bytes(data, 'utf-8')
print(bytesofData)

def msg():
    pass

print(callable(data))
print(callable(msg))