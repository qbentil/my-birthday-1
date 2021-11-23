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


for user in users:
    print(user[0], user[1])

# for phone in phones:
#     print(phone)