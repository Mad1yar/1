from pyowm import OWM
from pyowm.utils import config
from pyowm.utils import timestamps

owm = OWM('7ec1bcbdfa9fd967d29700d27a875367')
mgr = owm.weather_manager()

place = input("Введите город:")

observation = mgr.weather_at_place('place')
w = observation.weather


temp = w.temperature('celsius')["temp"]

print(" В городе " + " сейчас " + w.detailed_status)
print("Температура сейчас в районе" + str(temp))
