import pandas as pd
import numpy as np

df = pd.read_csv("ted_main.csv")

tiempo_horas = df['duration'].sum() / 3600
print("Tiempo en horas del total de videos: "tiempo_horas)

eventos_unicos = np.unique(df['event'])
print(eventos_unicos)

algore = df[df.ix[:,6]=="Al Gore"].count()
print("Cantidad de veces que Al Gore ha realizado charlas: "algore['main_speaker'])

views_max = df['views'].max()
views_min = df['views'].min()

print("Cantidad maxima de visitas: "views_max)
print("Cantidad minima de visitas: "views_min)

promedio_lenguajes = df['languages'].mean()
print(promedio_lenguajes)

df2 = df[df.ix[:,5] > 0]
np.savetxt("ted_fixed.csv", df2, fmt="%s", delimiter=",")
