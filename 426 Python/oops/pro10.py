class Math1:
    def sum(self, ip1, ip2):
        print("Sum is ",ip1+ip2)
    def sub(self, ip1, ip2):
        print("Sub is ",ip1-ip2)

class Math2(Math1):
    def div(self, ip1, ip2):
        print("Div is ",ip1/ip2)
    def mul(self, ip1, ip2):
        print("Mul is ",ip1*ip2)

obj = Math2()
obj.sub(111, 22)
obj.sum(111, 22)
obj.mul(111, 22)
obj.div(111, 22)
