import sys
sys.setrecursionlimit(100000)  #递归层数限制

# author :rianley cheng
#qq:2855132411

#递归
#返回值

# def num(n):
#     if n==1:
#         return n
#     else:
#         return n*num(n-1)
# meber = int(input("请输入一个正整数："))
#
# num_num =num(meber)
# print("%s 的阶乘 %s"%(meber,num_num))

#斐波那契数列
#迭代
def tuzi(n):
    n1 =1
    n2 =1
    n3 =1
    if n < 1:
        print("输入有误")
        return -1
    while(n-2)>0:
         n3=n1+n2
         n1 =n2
         n2 =n3
         n -=1
    return n3
yue =int(input("请输入次数："))
tuzi_num =tuzi(yue)
print("%s次得到的数值是%s"%(yue,tuzi_num))


# 递归
#分治思想
# def tuzi(n):
#     if n ==1 or n==2:
#         return 1
#     else:
#         return (tuzi(n-1))+(tuzi(n-2))
#
# result = tuzi(40)
# print(result)

#字典
# dict = {}
# dict =dict.fromkeys(range(23),'赞')
#
# dict.pop(22);
# print(dict)





