def bell_triangle(n):
    n=n+1
    triangle = [[1]]
    for i in range(1, n):
        row = [triangle[i-1][-1]]
        for j in range(i):
            row.append(row[-1] + triangle[i-1][j])
        triangle.append(row)
    return triangle[-1]

n = int(input("Your rows : "))
print ("rows is : ",bell_triangle(n))