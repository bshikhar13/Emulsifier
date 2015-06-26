from NaiveBayes import  Pool
import os
from decimal import Decimal
import sys
content = ''
for word in sys.argv[1:]:
    content += word + ' '
    
filename='testing.txt'
target = open (filename, 'w')
target.write(content)
target.close()


print("fuck")

print("yoyo" + content)

DClasses = ["achievement_striving",  "adventurousness",  "artistic_interest",  "assertiveness", "cautiousness", "cheerfulness", "dutifulness", "emotionality", "excitement_seeker", "friendliness", "gregariousness", "imagination", "intellect", "liberalism", "orderliness", "self_discipline", "self_efficacy", "trust", "activity_level", "altruism", "anger", "anxiety", "cooperation", "depression", "self_consciousness", "immoderation", "modesty", "morality", "sympathy", "vulnerability"]

base = "learn/"
p = Pool()
for i in DClasses:
    p.learn(base + i, i)



base = "test/"


print("I am in class !! ")
res = p.Probability(filename)
print(str(res))
print("\nIamhero\n")
