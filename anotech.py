import matplotlib.pyplot as plt
import numpy as np
# %matplotlib inline

from numpy import genfromtxt
from scipy.stats import norm


def read_dataset(filePath,delimiter=','):
    return genfromtxt(filePath, delimiter=delimiter)

"""def feature_normalize(dataset):
    mu = np.mean(dataset,axis=0)
    sigma = np.std(dataset,axis=0)
    return (dataset - mu)/sigma"""
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

tr_data = read_dataset('python_train_real_1.csv')
gt_data = read_dataset('python_test_real_1.csv')

n_training_samples = tr_data.shape[0]	# shape[0] => number of rows
n_dim = tr_data.shape[1]				# shape[1] => number of columns
"""
plt.figure()
plt.xlabel("time (hr)")
plt.ylabel("values ()")
plt.plot(tr_data[:,0],tr_data[:,1],"bx")
plt.show()"""
""" real calculation starts here """

mu, sigma = estimateMuSigma(tr_data[:,1])
p = univariateGaussian(tr_data[:,1],mu,sigma)

fscore, ep = selectThresholdByCV(p,gt_data[:,2])
outliers = np.asarray(np.where(p < ep))
print(outliers)
"""plt.figure() 
plt.xlabel("Time (hr)") 
plt.ylabel("Values ()") 
plt.plot(tr_data[:,0],tr_data[:,1],"bx")
plt.plot(tr_data[outliers,0],tr_data[outliers,1],"ro") 
plt.show()"""