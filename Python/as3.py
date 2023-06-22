rows = int(input("number of row :"))

for i in range(rows, 0, -1):
    for j in range(rows-i):
        print(" ", end="")
    for k in range(2*i-1):
        if k == 0 or k == 2*i-2 or i == rows:
            print("*", end="")
        else:
            print(" ", end="")
    print()