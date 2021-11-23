
from twilio.rest import Client
from twilio.base.exceptions import TwilioRestException
import mysql.connector as db
from mysql.connector import Error

try:
    connection =db.connect(host='localhost',database='birthday',user='root',password='')
    if connection.is_connected():
        cursor = connection.cursor()
        cursor.execute("select name, phone from users")
        users = cursor.fetchall()  #get all wishers

except Error as e:
    print("Error while connecting to MySQL", e)
finally:
    if connection.is_connected():
        cursor.close()
        connection.close()



# Your Account SID from twilio.com/console
account_sid = "AC0de154fa6be756023bd0eed0ba55c266"
# Your Auth Token from twilio.com/console
auth_token  = "3a20ecc93e8ad2bfc13ad879c0844522"

client = Client(account_sid, auth_token)

# for user in users:
#     print(user[1])
#     message = client.messages.create(
#         to=user[1], 
#         from_="+17174233449",
#         body="Hello! "+ user[0]+ ", Bentil Here🥰! Thank you for making my Birthday a memorable one. God bless you for your time, prayer, wishes and gifts. I Love you🥰🥰")

#     print(message.sid)
user = "Themanbentil"
try:
    message = client.messages.create(
        to="+233547363882", 
        from_="+17174233449",
        body="Hello! "+ user+ ", Bentil Here🥰! Thank you for making my Birthday a memorable one. God bless you for your time, prayer, wishes and gifts. I Love you🥰🥰")

    print(message.sid)
except TwilioRestException as err:
  # Implement your fallback code here
  print(err)