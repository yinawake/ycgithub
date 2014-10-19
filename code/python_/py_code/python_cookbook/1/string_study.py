#chr()  str()

print(chr(97))      #a
print(str(97))      #'97'

for i in map(ord,'yinchao'):
    print(i,end='\t')

print("\n","--"*10)
# is a  str
print('isinstance("yinchao",str)',isinstance('yinchao',str),sep="====>")

#align
print('yinchao'.ljust(20))
print('yinchao'.rjust(20))
print('yinchao'.center(20))

print('yinchao'.ljust(20,"+"))
print('yinchao'.rjust(20,"+"))
print('yinchao'.center(20,"+"))

#trim
print('  yinchao   '.lstrip())
print('  yinchao   '.rstrip())
print(  'yinchao   '.strip())

print('|','xyxyx yinchao xyxyx'.strip('xy'),'|')
