import matplotlib.pyplot as plt
import numpy as np

data = np.loadtxt("data3.txt", delimiter=",")
X1 = data[:,0]
X2 = data[:,1]
Y = data[:,2]
X0 = [1]*(len(X1))

e = 2.718281828459

# 2.Sigmoid or Logistic Function
print('#'*80)
print("2) Sigmoid or Logistic Function, S(x) : ")
z = [-10,-5,-2,0,2,5,10]
for i in range(0,7) :
    zt = (1/(1+(e**(-z[i]))))
    print("S(%d) = %.2f"%(z[i],zt))
print('#'*80)

# 3.Standardization
print('3) Standardization : ')
print("INPUT".center(80,"-"))
print('Mean of x1 : %.2f'%np.mean(X1))
print('Standard deviation of x1 : %.2f'%np.std(X1))
print('Mean of x2 : %.2f'%np.mean(X2))
print('Standard deviation of x2 : %.2f'%np.std(X2))

Fsx1 = (X1-np.mean(X1))/(np.std(X1))
Fsx2 = (X2-np.mean(X2))/(np.std(X2))

print("OUTPUT".center(80,"-"))
print('Mean of the standardization x1 : %.2f'%np.mean(Fsx1))
print('Standard deviation of the standardization x1 : %.2f'%np.std(Fsx1))
print('Mean of the standardization x2 : %.2f'%np.mean(Fsx2))
print('Standard deviation of the standardization x2 : %.2f'%np.std(Fsx2))
print('#'*80)

# สร้าง Matrix
MX = np.matrix([X0,X1,X2])
MX = MX.transpose()
MXf = np.matrix([X0,Fsx1,Fsx2])
MXf = MXf.transpose()
MY = np.matrix([Y])
MY = MY.transpose()

# 4.Cost function

def CFL(Thata0,Thata1,Thata2):
    J = np.matrix([Thata0,Thata1,Thata2])
    J = J.transpose()
    EC = 0
    for i in range (0,len(Y)):
        MXT = MXf.dot(J)
        MXT = float(MXT[i])
        SF = (1/(1+(e**(-MXT))))
        s1 = Y[i] * (np.log(SF))
        s2 = (1-Y[i]) * (np.log(1-SF))
        C = 0-s1-s2
        EC = EC+C
    CF = 1/(len(Y))*EC
    return CF

CF0 = CFL(0,0,0)
CF1 = CFL(1,1,1)
CF2 = CFL(-1,-1,-1)
CF3 = CFL(-1,0,1)
print("4) Cost Function, J(T0,T1,T2) : ")
print("J(0,0,0) : %.3f"%(CF0))
print("J(1,1,1) : %.3f"%(CF1))
print("J(-1,-1,-1) : %.3f"%(CF2))
print("J(-1,0,1) : %.3f"%(CF3))

print('#'*80)

# 5.Gradient Descent

def MLGD2(X,Y,LR,round):
    NumX = (len(Y))
    Thata = np.matrix([0, 0, 0])
    Thata = Thata.transpose()
    XT = X.transpose()
    TA=Thata
    for i in range (0,round):
        Xt0 = X.dot(Thata)
        Xt1 = XT.dot(Xt0-Y)
        E = ((LR * (1 / NumX)) * (Xt1))
        Thata = Thata - E
        TA = np.hstack((TA,Thata))
    return TA

GD = MLGD2(MXf,MY,0.01,400)

print('5) Processing the gradient descent for logistic regression: ')
print("  FIRST ROUND  ".center(80,"-"))
GD0=GD[:,1]
ga0=float(GD0[0])
ga1=float(GD0[1])
ga2=float(GD0[2])
print("Thata0 : %.3f"%ga0)
print("Thata1 : %.3f"%ga1)
print("Thata2 : %.3f"%ga2)
print("J(%.2f,%.2f,%.2f) : %.3f"%(ga0,ga1,ga2,(CFL(ga0,ga1,ga2))))
print("  FINAL ROUND  ".center(80,"-"))
GDn=GD[:,400]
gb0=float(GDn[0])
gb1=float(GDn[1])
gb2=float(GDn[2])
print("Thata0 : %.3f"%gb0)
print("Thata1 : %.3f"%gb1)
print("Thata2 : %.3f"%gb2)
print("J(%.2f,%.2f,%.2f) : %.3f"%(gb0,gb1,gb2,(CFL(gb0,gb1,gb2))))
print('#'*80)

#7 Classification

print("7) Classification Testing")
print('-'*80)
print(("The 1st test Score".center(26," "))+("The 2st test Score".center(26," "))+('Probability of "Pass"'.center(26," ")))
print('-'*80)

t1 = [20,35,60,75,90]
t2 = [95,75,80,60,25]
tc = [0,0,0]
t3 = []
for u in range(0,5):
    tc[0] = 1
    tc[1] = t1[u]
    tc[2] = t2[u]
    t3.append(max(tc))

for i in range (0,5):
    AA=t1[i]
    BB=t2[i]
    CC=t3[i]
    print(('{:^26,.0f}'.format(AA))+('{:^26,.0f}'.format(BB))+('{:^26,.0f}'.format(CC)))

print('-'*80)
print('#'*80)


# 1.กราฟ

xr1=[]
xr2=[]
xy1=[]
xy2=[]
for i in range(0,len(Y)):
    if Y[i] == 0:
        xr1.append(X1[i])
        xr2.append(X2[i])
    else:
        xy1.append(X1[i])
        xy2.append(X2[i])

plt.scatter(xr1,xr2,color="red",marker="X",s=50)
plt.scatter(xy1,xy2,color="yellow",marker="*",s=50)
plt.xlim(0,100)
plt.ylim(0,100)
plt.xlabel('The 1st Test Score')
plt.ylabel('The 2st Test Score')
plt.show()

