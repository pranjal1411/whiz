# -*- coding: utf-8 -*-
"""
Created on Thu Mar  8 20:04:49 2018

@author: Mehul
"""
import gym
import numpy as np
env=gym.make("Taxi-v2")
si=env.reset()
print(si)
env.render()
ns=env.observation_space.n #number of states
na=env.action_space.n
#Rand steps
count=0
g=0
reward=None
while reward!=20:
    state,reward,done,info=env.step(env.action_space.sample())
    count+=1
    g+=reward
print("Solved in {} steps with reward of {}".format(count,g))
env.render()

#Qlearn

Q=np.zeros([ns,na])
print(Q.shape)
#Qhist=np.zeros([ns,na,0])
episodes=40000
alpha=0.65
rewardList=[]
for episode in range(1,episodes+1):
    done=False
    R,reward=0,0
    state=env.reset()
    while reward!=20:
        action=np.argmax(Q[state])
        s2,reward,done,info=env.step(action)
        Q[state,action]+=alpha*(reward+np.max(Q[s2])-Q[state,action])
        R+=reward
        state=s2
       #Qhist=np.dstack((Qhist,Q))
    rewardList.append(R)
    if episode%500==0:
        print("Episode:{} Reward:{} Total Average reward:{} ".format(episode,R,sum(rewardList)/len(rewardList)))
#steps=Qhist.shape[2]
done=False
state=si
env.env.s=si
print(state)
g=0
l=[]
while done!=True:
    action=np.argmax(Q[state])
    l.append(action)
    state,reward,done,info=env.step(action)
    g+=reward
    env.render()
print("Total Reward is {}".format(g))
print(l)


