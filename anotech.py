import matplotlib.pyplot as plt
import numpy as np

#from IPython import get_ipython
#get_ipython().run_line_magic('matplotlib', 'inline')

from numpy import genfromtxt
from scipy.stats import multivariate_normal
from sklearn.metrics import f1_score

def read_dataset(filePath,delimiter=','):
    return genfromtxt(filePath, delimiter=delimiter)

def feature_normalize(dataset):
    mu = np.mean(dataset,axis=0)
    sigma = np.std(dataset,axis=0)
    return (dataset - mu)/sigma

def estimateGaussian(dataset):
    mu = np.mean(dataset, axis=0)
    sigma = np.cov(dataset.T)
    return mu, sigma

def multivariateGaussian(dataset,mu,sigma):
    p = multivariate_normal(mean=mu, cov=sigma)
    return p.pdf(dataset)

def selectThresholdByCV(probs,gt):
    best_epsilon = 0
    best_f1 = 0
    f = 0
    stepsize = (max(probs) - min(probs)) / 1000;
    epsilons = np.arange(min(probs),max(probs),stepsize)
    for epsilon in np.nditer(epsilons):
        predictions = (probs < epsilon)
        f = f1_score(gt, predictions, average = "binary")
        if f > best_f1:
            best_f1 = f
            best_epsilon = epsilon
    return best_f1, best_epsilon

tr_data = read_dataset('server_data/tr_server_data.csv')
cv_data = read_dataset('server_data/cv_server_data.csv')
gt_data = read_dataset('server_data/gt_server_data.csv')

n_training_samples = tr_data.shape[0]
n_dim = tr_data.shape[1]

#plt.figure()
#plt.xlabel("Latency (ms)")
#plt.ylabel("Throughput (mb/s)")
#plt.plot(tr_data[:,0],tr_data[:,1],"bx")
#plt.show()


mu, sigma = estimateGaussian(tr_data)
p = multivariateGaussian(tr_data,mu,sigma)

p_cv = multivariateGaussian(cv_data,mu,sigma)
fscore, ep = selectThresholdByCV(p_cv,gt_data)
outliers = np.asarray(np.where(p < ep))

print (outliers)


#plt.figure()
#plt.xlabel("Latency (ms)")
#plt.ylabel("Throughput (mb/s)")
#plt.plot(tr_data[:,0],tr_data[:,1],"bx")
#plt.plot(tr_data[outliers,0],tr_data[outliers,1],"ro")
#plt.show()
