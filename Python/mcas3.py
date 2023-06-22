import matplotlib.pyplot as plt
import numpy as np

data = np.loadtxt("data2.txt", delimiter=",")
X0 = [1]*47
X1 = data[:,0]
X2 = data[:,1]
Y = data[:,2]

# 1.Standardization
"""
ss1=0
for i in range (0,len(X1)):
    sx1=(X1[i]-(np.mean(X1)))**2
    ss1+=sx1
Sd1= (ss1/(len(X1)-1)) 
np.sqrt(Sd1)

ss2=0
for i in range (0,len(X2)):
    sx2=(X2[i]-(np.mean(X2)))**2
    ss2+=sx2
Sd2= (ss2/(len(X2)-1)) 
np.sqrt(Sd2)
"""

print('#'*80)
print('1) Standardization : ')
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

# 2.Gradient Descent

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

GD = MLGD2(MXf,MY,0.05,1000)

GT0=GD[0,400]
GT1=GD[1,400]
GT2=GD[2,400]
print('2) Processing the Gradient Descent for multiple linear regression : ')
print('Theta0 : '+ ('{:>15,.3f}'.format(GT0)))
print('Theta1 : '+ ('{:>15,.3f}'.format(GT1)))
print('Theta2 : '+ ('{:>15,.3f}'.format(GT2)))
print('#'*80)

# 3.Normal equation
# ใช้ X1,X2 เดิม


def NE(X,Y):

    XT = X.transpose()
    XTX = XT.dot(X)
    XIV = np.linalg.inv(XTX)
    XY = XT.dot(Y)
    TT = XIV.dot(XY)

    return TT

EE = NE(MX,MY)

ET0=EE[0,0]
ET1=EE[1,0]
ET2=EE[2,0]
print('3) Processing the normal equation for multiple linear regression : ')
print('Theta0 : '+ ('{:>15,.3f}'.format(ET0)))
print('Theta1 : '+ ('{:>15,.3f}'.format(ET1)))
print('Theta2 : '+ ('{:>15,.3f}'.format(ET2)))
print('#'*80)

# 4.Prediction
Area=[235,557,984,2165,4295,6845,7841]
Bedrooms=[0,1,0,2,5,3,6]

print('4) Predicting the obtained linear model : ')
print('-'*80)
print(("Features".center(40," "))+("Price".center(40," ")))
print('-'*80)
print(("Area".center(20," "))+("Number of Bedrooms".center(20," "))+("Gradient Descent".center(20," "))+("Normal Equation".center(20," ")))
print('-'*80)

for u in range (0,7):
    AA=(Area[u])
    BB=(Bedrooms[u])
    CC=(GT0 + GT1*(Area[u]) + GT2*(Bedrooms[u]))
    DD=(ET0 + ET1*(Area[u]) + ET2*(Bedrooms[u]))
    print(('{:^20,.0f}'.format(AA))+('{:^20,.0f}'.format(BB)+('{:^20,.0f}'.format(CC))+('{:^20,.0f}'.format(DD))))

print('-'*80)
print('#'*80)

# กราฟ
xl = np.linspace(0, 400)
yl = np.array(0)
for m in range(1,400):
    GT = GD[:,m]
    XG = MX.dot(GT)
    XGY = XG - MY
    XGT = XGY.transpose()
    XG = XGY.dot(XGT)
    MCF = (1 / (2 * 47)) * (XG)

#plt.plot(xl,yl,color="cyan", linewidth=1)
plt.xlim(0,400)
plt.ylim(0,6)
plt.xlabel('Number of iterations')
plt.ylabel('Cost Function, J(\u03B8)')
plt.show()