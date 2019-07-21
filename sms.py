import os,sys,json,requests
import zerosms
def getWeatherRecommendation(city):
    # Python program to find current weather details of any city using openweathermap api  

    # Enter your API key here 
    api_key = "72f5b956d0d9264cc5f68cb311e3f80b"

    # base_url variable to store url 
    base_url = "http://api.openweathermap.org/data/2.5/weather?"

    # Give city name 
    city_name = city

    # complete_url variable to store
    complete_url = base_url + "appid=" + api_key + "&q=" + city_name 

    # get method of requests module return response object 
    response = requests.get(complete_url) 

    # json method of response object convert json format data into  python format data 
    weatherData = response.json() 

    # Now x contains list of nested dictionaries Check the value of "cod" key is equal to "404", means city is found otherwise, city is not found 
    if weatherData["cod"] != "404": 

        # store the value of "main" 
        # key in variable y 
        mainWD = weatherData["main"] 

        # store the value corresponding 
        # to the "temp" key of y 
        current_temperature = round(mainWD["temp"] - 270, 2)

        # store the value corresponding 
        # to the "pressure" key of y 
        current_pressure = mainWD["pressure"] 

        # store the value corresponding 
        # to the "humidity" key of y 
        current_humidiy = mainWD["humidity"] 

        # store the value of "weather" 
        # key in variable z 
        z = weatherData["weather"] 

        # store the value corresponding to the "description" and "id" key at the 0th index of z 
        weather_description = z[0]["description"] 
        weather_id = z[0]['id']

        '''# print following values 
        print(" Temperature (in Celcius) = " +
                        str(current_temperature) + 
              "\n atmospheric pressure (in hPa unit) = " +
                        str(current_pressure) +
              "\n humidity (in percentage) = " +
                        str(current_humidiy) +
              "\n description = " +
                        str(weather_description)) '''
    else: 
        print(" City Not Found ")
        return

    if((weather_id > 700 and weather_id <800) or (weather_id > 800 and weather_id < 803)):
        alert = "ALERT : \nWeather seems to be getting unsuitable for fishing.\nWeather : " + weather_description + "\nTemperature : " + str(current_temperature) + " C"
        #print(alert)
        return alert
    elif(weather_id > 802 and weather_id < 805):
        alert = "ALERT : \nWeather is unsuitable for fishing.\nWeather : " + weather_description + "\nTemperature : " + str(current_temperature) + " C"
        #print(alert)
        return alert
    elif(current_temperature > 31.5 and current_temperature < 35.5):
        alert = "ALERT : \nIt is a great time to be fishing.\nWeather : " + weather_description + "\nTemperature : " + str(current_temperature) + " C"
        #print(alert)
        return alert
    elif(current_temperature > 38 and current_temperature < 28):
        alert = "ALERT : \nTemperature is unsuitable for fishing.\nWeather : " + weather_description + "\nTemperature : " + str(current_temperature) + " C"
        #print(alert)
        return alert




def sendSMS(client_number,message):
    #import API
    import zerosms
    URL = 'http://www.way2sms.com/api/v1/sendCampaign'

    #get request
    def sendPostRequest(reqUrl, apiKey, secretKey, useType, phoneNo, senderId, textMessage):
      req_params = {
      'apikey':apiKey,
      'secret':secretKey,
      'usetype':useType,
      'phone': phoneNo,
      'message':textMessage,
      'senderid':senderId
      }
      return requests.post(reqUrl, req_params)

    #get response
    response = sendPostRequest(URL, '03V8ZM3G0JSCH819EUAKLUQ2BEGOVQFW', '9X0O7QFFYP888R2F', 'stage', client_number , '9158752433', message)
    
    #print response
    print(response.text)


sms_text = getWeatherRecommendation(sys.argv[1])
if sms_text:
    sendSMS(sys.argv[2], sms_text)
