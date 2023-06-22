AA=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
aa=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
AAaa = AA+aa

s=str(input("your code :"))
n1=int(input("your num1 :"))
n2=int(input("your num2 :"))

se=[]
se.extend(s)

SN = []
for x in range (0,len(se)):
    if (x%2) == 0 :
        check = AAaa.index(se[x])
        if check < 26:
            num = AA.index(se[x])
            num = ((num+n1)%26)
            SN.append(AA[num])
        elif check >= 26:
            num = aa.index(se[x])
            num = ((num+n1)%26)
            SN.append(aa[num])
    else:
        check = AAaa.index(se[x])
        if check < 26:
            num = AA.index(se[x])
            num = ((num+n2)%26)
            SN.append(AA[num])
        elif check >= 26:
            num = aa.index(se[x])
            num = ((num+n2)%26)
            SN.append(aa[num])

SN = ''.join(SN)

print ("Your answer",SN)
print ("Your input",s)