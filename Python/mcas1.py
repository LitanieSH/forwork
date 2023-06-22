import matplotlib.pyplot as plt
import numpy as np

xr = [2.8,3,3.5,15,17,18,18.5,19.5,20,22.5,23,24.5,24.6,24.8,25]
yr = [12,31,14.5,58,68,67,69,41,42,67,70,70,68,52,42]

xg = [8,8,9.2,9.5,10,11,11.5,12,13]
yg = [29.5,41,28,27.5,10,16,25,38,25]

plt.scatter(xr,yr,color="red",marker="o",s=100)
plt.scatter(xg,yg,color="green",marker="o",s=100)

# กำหนด decision boundary
# y=(m*x)+b

x1 = np.linspace(8.5,1)
y1 = np.linspace(0,70)
plt.plot(x1,y1,color="blue", linewidth=2)

x2 = np.linspace(8.5+10,1+10)
y2 = np.linspace(0,70)
plt.plot(x2,y2,color="blue", linewidth=2)

#คำนวน m และ b
m = (70-0) / (1-8.5)
b1 = 70-(1*m)
b2 = 70-(11*m)
plt.text(1,76,str("[y=(%0.2f*x)+%0.2f]  [y=(%0.2f*x)+%0.2f]"%(m,b1,m,b2)),fontsize = 10, color = 'blue') 

plt.text(2,71,str("Decision Boundary "),fontsize = 12, color = 'blue')

plt.xlim(0,27.5)
plt.ylim(0,75)
plt.xlabel('Tumor Size [mm]')
plt.ylabel('Age [Year]')
plt.show()

# Ai
xt = int(input("input x : "))
yt = int(input("input y : "))
if (m*xt)+b1<yt<(m*xt)+b2 :
 print ("Green")
else :
 print("red")