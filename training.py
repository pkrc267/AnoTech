import matplotlib.pyplot as plt
import MySQLdb
import MySQLdb.cursors
import numpy as np
from numpy import genfromtxt
from scipy.stats import norm


def read_dataset(filePath,delimiter=','):
   return genfromtxt(filePath, delimiter=delimiter)

def estimateMuSigma(dataset):
   mu = np.mean(dataset)
   sigma = np.std(dataset)
   return mu, sigma

def univariateGaussian(dataset,mu,sigma):
   p = norm(mu, sigma)
   return p.pdf(dataset)

def selectThresholdByCV(probs,yval):
   best_epsilon = 0
   best_f1 = 0
   f = 0
   stepsize = (np.max(probs) - np.min(probs)) / 1000;
   epsilons = np.arange(np.min(probs),np.max(probs),stepsize)
   for epsilon in np.nditer(epsilons):
       preds = (probs < epsilon)
       tp = np.sum(np.logical_and(preds == 1, yval == 1)).astype(float)
       fp = np.sum(np.logical_and(preds == 1, yval == 0)).astype(float)
       fn = np.sum(np.logical_and(preds == 0, yval == 1)).astype(float)

       precision = tp / (tp + fp)
       recall = tp / (tp + fn)
       f = (2 * precision * recall) / (precision + recall)
       if f > best_f1:
           best_f1 = f
           best_epsilon = epsilon
   return best_f1, best_epsilon

""" starting initial configuration """

conn = MySQLdb.connect(user="root", passwd="",db="anotech", cursorclass = MySQLdb.cursors.SSCursor)
cur = conn.cursor()

cur.execute("SELECT training_set FROM file_base")
row = cur.fetchone()
print (row)
tr_data = read_dataset(row)
print (str(tr_data[2]))
#gt_data = read_dataset('python_test_real_1.csv')

plt.figure()
plt.xlabel("time (hr)")
plt.ylabel("values ()")
plt.plot(tr_data[:,0],tr_data[:,1],"bx")
plt.show()
""" real calculation starts here """

mu, sigma = estimateMuSigma(tr_data[:,1])
p = univariateGaussian(tr_data[:,1],mu,sigma)

fscore, ep = selectThresholdByCV(p,tr_data[:,2])
#print(ep)
