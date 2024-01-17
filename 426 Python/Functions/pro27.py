data = "welcome to world of python function"
bytarr = bytearray(data, 'utf-8')
mv = memoryview(bytarr)

print(bytarr)

print(bytes(mv[0]))

print(mv[0])