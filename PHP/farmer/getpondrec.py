import requests,json
import sys,os
import os,sys,json,requests
import zerosms

pondArea = float(sys.argv[1])
pondDepth = float(sys.argv[2])
waterDuration = float(sys.argv[3])
if pondArea < 500:
    if pondDepth < 1.5:
        if waterDuration < 9:
            recommendation = 'Ideal for Fry rearing at 50 Lakh Spawn/ha'
        else:
            recommendation = 'Ideal for fingerling rearing  stock 15,000 Fry/ha'
elif pondArea < 1000:
    if pondDepth < 2:
        if waterDuration < 9:
            recommendation = 'Ideal for Fry rearing at 50 Lakh Spawn/ha'
        elif waterDuration > 9 and waterDuration < 12:
            recommendation = 'Ideal for one crop of fingerling and second crop of Yearling rearing  stock 15,000 Fry/ha'
        else:
            recommendation = 'Ideal for one crop of fingerling as well as Yearling rearing 15000 fingerling/ha'
    else:
        if waterDuration < 9:
            recommendation = 'Ideal for Fry rearing at 50 Lakh Spawn/ha'
        elif waterDuration > 9 and waterDuration < 12:
            recommendation = 'Ideal for one crop of fingerling and second crop of Yearling rearing  stock 15,000 Fry/ha'
        else:
            recommendation = 'Ideal for one crop of fingerling as well as fish rearing'
elif pondArea <4000:
    if waterDuration < 9:
        recommendation = 'Ideal for Fingerling rearing at 20000 Fry per ha'
    elif waterDuration > 9 and waterDuration < 12:
        recommendation = 'Ideal for one crop of fingerling and second crop of Yearling rearing  stock 15,000 Fry/ha'
    else:
        recommendation = 'Ideal for one crop of fingerling as well as fish rearing'
else:
        recommendation = 'Fish Rearing 10000 Fingerlings/ha area OR 5000 Yearling/ha'



print(recommendation,"45 Degree Cel")


