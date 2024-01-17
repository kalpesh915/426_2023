mycode = 'x=10\ny=15\nz=x+y\nprint("sum",z)'

code = compile(mycode, 'sum.py', 'exec')
print(code)

exec(code)
exec('print("Welcome")')

print(sum([11, 22, 33]))
print(sum([11, 22, 33], 10))