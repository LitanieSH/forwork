import matplotlib.pyplot as plt
import numpy as np

data = np.loadtxt("data1.txt", dtype = np.float64, delimiter = ",")
X = data[:,0]
Y = data[:,-1]

# Cost Function
def CF(X,Y):
    Thata0=0
    Thata1=0
    t=0
    r=0
    for i in range (0,len(X)):
        c=(Thata0+(Thata1*X[i])-Y[i])**2
        t=t+c
        r+=1
    CF=1/(2*r)*t
    return(CF)


print ('1) Checking the cost function for simple liner regression : \n J([0,0]) = ',CF(X,Y))
print ('-'*50)

# Gradient Descent : LR=0.01 : Round=1500 (Print 1,501,1001)
def GD(X,Y,LR,round):
    Thata0=0
    Thata1=0
    GD0=[]
    GD1=[]
    for i in range (0,round):
        st0=0
        st1=0
        r = 0
        for a in range(0,len(X)):
            s0=(Thata0+Thata1*X[a]-Y[a])
            st0=st0+s0
            r += 1
        Thata0=Thata0-LR*(1/r*st0)

        for b in range(0,len(X)):
            s1=(Thata0+Thata1*X[b]-Y[b])*X[b]
            st1=st1+s1
        Thata1=Thata1-LR*(1/r*st1)

        GD0.append(Thata0)
        GD1.append(Thata1)
    return GD0,GD1

(GD0,GD1)=GD(X,Y,0.01,1500)


print('2) Processing the gradient descent for simple linear regression :')
print('ROUND : 1     \nTheta0 : [%f] \nTheta1 : [%f]' % (GD0[1], GD1[1]))
print('ROUND : 501   \nTheta0 : [%f] \nTheta1 : [%f]' % (GD0[500], GD1[500]))
print('ROUND : 1001  \nTheta0 : [%f] \nTheta1 : [%f]' % (GD0[1000], GD1[1000]))
print('FINAL ROUND : \nTheta0 : [%f] \nTheta1 : [%f]' % (GD0[-1], GD1[-1]))
print('-' * 50)

GD0.append(-3.63029144)
GD1.append(1.16636235)
# Ai
Xview=[312221.0,5010989.0,11234564.0,16422371.0,28543890.0]
print('3) Predicting the obtained linear model :')

for r in range (0,5):
    Xv= Xview[r]/1000000
    pY = GD0[-1] + Xv*GD1[-1]
    pY = pY*1000
    pY = int(pY)
    Xvi = int(Xview[r])
    print ('Views['+'{:>10}'.format(Xvi)+'] -> Profit['+'{:>10}'.format(pY)+']')
print('-'*50)

# linear
xl = np.linspace(0,25)
yl = (GD0[-2])+(xl*(GD1[-2]))
plt.plot(xl,yl,color="red", linewidth=1)

plt.scatter(X,Y,color="blue",marker="x",s=25)
plt.xlim(4.5,23)
plt.ylim(-4,26)
plt.xlabel('Total View (x1,000,000 Views)')
plt.ylabel('Profit (x1,000 $USD)')
plt.show()